import puppeteer from 'puppeteer';
import fs from 'fs';
import http from 'http';
import syncRequest from 'sync-request';
import { glob } from 'glob';

const pages = await glob('v0/book/content/pages/en/**/*.md', { ignore: 'node_modules/**' })
const delay = ms => new Promise(res => setTimeout(res, ms));

let screenshotsToSave = [];

console.log('Searching screenshots...');

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
    screenshotsToSave.push(screenshots[i][1]);
    console.log(' -> found ' + screenshots[i][1]);
  }
}

console.log('Saving screenshots...');

for (let i in screenshotsToSave) {
  const browser = await puppeteer.launch();
  const browserPage = await browser.newPage();

  const screenshotUrl = screenshotsToSave[i]
    .replace('/hubleto/public/help/v0/screenshots/', '')
    .replace('--', '/')
    .replace('.png', '')
  ;

  const hubletoUrl = 'http://localhost/hubleto-dev/' + screenshotUrl;
  console.log('  -> saving ' + screenshotUrl + ' -> ' + hubletoUrl);

  const isMobile = screenshotUrl.endsWith('-m');

  await browserPage.goto(
    isMobile ? hubletoUrl.substring(0, hubletoUrl.length - 2) : hubletoUrl,
    { waitUntil: ['domcontentloaded', 'networkidle0'] }
  );

  await browserPage.setViewport(isMobile ? {width: 412, height: 915} : {width: 1080, height: 1024});

  await browserPage.screenshot({ 
    path: 'v0/screenshots/' + screenshotUrl.replace('/', '--') + '.png',
    fullPage: true 
  });

  await browser.close();
}
