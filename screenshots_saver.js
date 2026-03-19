import puppeteer from 'puppeteer';
import fs from 'fs';
import http from 'http';
import syncRequest from 'sync-request';
import { glob } from 'glob';
console.log('starting');

const pages = await glob('v0/book/content/pages/en/**/*.md', { ignore: 'node_modules/**' })
const delay = ms => new Promise(res => setTimeout(res, ms));
console.log(pages);
for (let i in pages) {
  const pageUrl = 'http://localhost/hubleto/public/help/' + pages[i]
    .replaceAll('\\', '/')
    .replace('book/content/pages/', '')
    .replace('.md', '')
  ;

  console.log(pageUrl);
  let pageContent = syncRequest('GET', pageUrl).getBody().toString();
  const screenshots = [...pageContent.matchAll(/class="screenshot"\s+src="(.*?)"/g)];
  for (let i in screenshots) {
    const screenshotSlug = screenshots[i][1];
    console.log(' -> ' + screenshotSlug);
    saveScreenshot(screenshotSlug);
  }


//   let req = http.get(pageUrl, (res) => {
//     console.log(pageUrl);
//     let pageContent = '';
//     res.on("data", (chunk) => {
//       pageContent = pageContent + chunk;
//     });
//     res.on('end', () => {
//       // console.log(pageContent);
//       const screenshots = [...pageContent.matchAll(
//         /class="screenshot" src="(.*?)"/g
//       )];
//       for (let i in screenshots) {
//         const screenshotSlug = screenshots[i][1];

//         saveScreenshot(screenshotSlug);
//       }
//     });
//   });
// req.setTimeout(5000);
// req.on('error', function (e) {
//   // General error, i.e.
//   //  - ECONNRESET - server closed the socket unexpectedly
//   //  - ECONNREFUSED - server did not listen
//   //  - HPE_INVALID_VERSION
//   //  - HPE_INVALID_STATUS
//   //  - ... (other HPE_* codes) - server returned garbage
//   console.log(e);
// });

// req.on('timeout', function () {
//   // Timeout happend. Server received request, but not handled it
//   // (i.e. doesn't send any response or it took to long).
//   // You don't know what happend.
//   // It will emit 'error' message as well (with ECONNRESET code).

//   console.log('timeout');
//   // req.destroy();
// });

}

async function saveScreenshot(screenshotSlug) {
  const browser = await puppeteer.launch();
  const browserPage = await browser.newPage();

  const screenshotUrl = screenshotSlug
    .replace('/hubleto/public/help/v0/screenshots/', '')
    .replace('--', '/')
    .replace('.png', '')
  ;

  const hubletoUrl = 'http://localhost/hubleto-dev/' + screenshotUrl;
  console.log('  -> ' + screenshotUrl + ' -> ' + hubletoUrl);

  const isMobile = screenshotUrl.endsWith('-m');

  await browserPage.goto(isMobile ? hubletoUrl.substring(0, hubletoUrl.length - 2) : hubletoUrl);
  if (isMobile) {
  await browserPage.setViewport({width: 412, height: 915});
  } else {
    await browserPage.setViewport({width: 1080, height: 1024});
  }
  await delay(5000);
  await browserPage.screenshot({ 
    path: 'v0/screenshots/' + screenshotUrl.replace('/', '--') + '.png',
    fullPage: true 
  });

  await browser.close();
}