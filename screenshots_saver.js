import puppeteer from 'puppeteer';
import fs from 'fs';
import http from 'http';
import { glob } from 'glob';
console.log('starting');

const pages = await glob('v0/book/content/pages/en/**/*', { ignore: 'node_modules/**' })
const delay = ms => new Promise(res => setTimeout(res, ms));

for (let i in pages) {
  const pageUrl = 'http://localhost/hubleto/public/help/' + pages[i]
    .replaceAll('\\', '/')
    .replace('book/content/pages/', '')
    .replace('.md', '')
  ;

  console.log(pageUrl);

  http.get(pageUrl, (res) => {
    let pageContent = '';
    res.on("data", (chunk) => {
      pageContent = pageContent + chunk;
    });
    res.on('end', () => {
      // console.log(pageContent);
      const screenshots = [...pageContent.matchAll(
        /class="screenshot" src="(.*?)"/g
      )];
      for (let i in screenshots) {
        const screenshotSlug = screenshots[i][1];

        saveScreenshot(screenshotSlug);
      }
    });
  });
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
  console.log(hubletoUrl);

  // Navigate the page to a URL.
  await browserPage.goto(hubletoUrl);

  // Set screen size.
  await browserPage.setViewport({width: 1080, height: 1024});

  await delay(5000);

  await browserPage.screenshot({ 
    path: 'v0/screenshots/' + screenshotUrl.replace('/', '--') + '.png',
    fullPage: true 
  });

  await browser.close();
}