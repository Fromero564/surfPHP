const buttonAcceptCookies= document.getElementById("btn-accept-cookies");
const AdviceCookies= document.getElementById("cookies-advice");
const BackgroundCookies = document.getElementById("background-cookie-advice");

if(!localStorage.getItem("cookies-accept")){
   
AdviceCookies.classList.add("active");
BackgroundCookies.classList.add("active");
 } else {
    loadGTM();
}


buttonAcceptCookies.addEventListener("click",()=>{
    AdviceCookies.classList.remove("active");
    BackgroundCookies.classList.remove("active");

    localStorage.setItem('cookies-accept', true);
    loadGTM();
})

function loadGTM() {
    const gtagScript = document.createElement('script');
    gtagScript.async = true;
    gtagScript.src = 'https://www.googletagmanager.com/gtag/js?id=YOUR_GTM_ID';
    document.head.appendChild(gtagScript);

    gtagScript.onload = () => {
        const script = document.createElement('script');
        script.innerHTML = `
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'YOUR_GTM_ID');
          gtag('event', 'conversion', {'send_to': '/lm0XCMqjuowZEPGty6M9'});
        `;
        document.head.appendChild(script);
    };
}