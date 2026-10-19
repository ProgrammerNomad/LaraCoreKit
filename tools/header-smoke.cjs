const { chromium } = require('playwright');
(async () => {
 const browser = await chromium.launch({channel:'msedge'});
 try {
  const page = await browser.newPage();
  for (const width of [320,375,640,790,890,1024,1440]) {
   await page.setViewportSize({width,height:900});
   await page.goto('http://127.0.0.1:8765/');
   await page.waitForFunction(()=>document.querySelector('[aria-label="Toggle navigation"]').hasAttribute('aria-expanded'));
   const result = await page.locator('header').evaluate(header=>{
    const controls=[...header.querySelectorAll('button,a[href="/admin"]')].filter(e=>e.getBoundingClientRect().width);
    return {height:header.getBoundingClientRect().height,centers:controls.map(e=>{const r=e.getBoundingClientRect();return r.y+r.height/2}),overflow:header.scrollWidth>innerWidth};
   });
   if(result.height!==65 || result.overflow || Math.max(...result.centers)-Math.min(...result.centers)>1) throw Error(JSON.stringify({width,...result}));
   if(width<1024){
    const toggle=page.getByRole('button',{name:'Toggle navigation'});
    await toggle.click();await page.locator('#mobile-nav').waitFor({state:'visible'});
    await page.keyboard.press('Escape');await page.locator('#mobile-nav').waitFor({state:'hidden'});
   }
   console.log('Header passed at',width);
  }
  await page.setViewportSize({width:790,height:900});await page.reload();
  await page.getByRole('button',{name:'Choose language'}).first().click();
  await page.getByRole('link',{name:'Hindi'}).first().waitFor({state:'visible'});
  await page.keyboard.press('Escape');
  await page.mouse.click(300,400);
  await page.waitForTimeout(200);
  await page.screenshot({path:process.env.TEMP+'/laracorekit-header-fixed.png'});
 } finally {await browser.close();}
})().catch(e=>{console.error(e);process.exitCode=1});
