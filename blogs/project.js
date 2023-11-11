caches.open("fox-store").then((cache) => {
  cache.delete("/").then((response) => {
    someUIUpdateFunction();
  });
});





var tempMenu = false;
let mobMenu = (paramId) => {
  let dom = document.getElementById(paramId);

  if (tempMenu == true) {
    dom.classList.add("hide")
    dom.classList.remove("animate")
    tempMenu = false;
  } else {
    dom.classList.remove("hide");
    dom.classList.add("animate");
    tempMenu = true;
  }
}






if (!('serviceWorker' in navigator)) {
  console.log("Not supported!");
} else {
  console.log("supported")
}



/* push notification
{
"subject" : "mailto: <teafweb@gmail.com>",
"publicKey" : "BGcwJESjYKPnnb31M-0BEtUs6grgPCmZqL8TDl8g3SyKCFcS3Eox06cBUkUVMZYQt-E-yih9sVKddYzo4AF5288",
"privateKey" : "hVZ7jV3Xb7aayPlaQNIb2vfPJNYTjTkIhtJ3fAIOIJo"
}
  */


this.onpush = (event) => {
  console.log(event.data);
  // From here we can write the data to IndexedDB, send it to any open
  // windows, display a notification, etc.
}
// Use serviceWorker.ready to ensure that you can subscribe for push
const startSw =()=>  {
  let subscriberEndpoint = "NOT READY";
  navigator.serviceWorker.register(
    './sw.js'
  ).then((registration) => {
    console.log("scope is:", registration.scope)
  })
}




const startSwNotification = () => {
  let subscriberEndpoint = "NOT READY";
  navigator.serviceWorker.register(
    './sw.js'
  ).then((registration) => {
    console.log("scope is:", registration.scope)
  })
  navigator.serviceWorker.ready.then(
    (serviceWorkerRegistration) => {
      const options = {
        userVisibleOnly: true,
        applicationServerKey: 'BGcwJESjYKPnnb31M-0BEtUs6grgPCmZqL8TDl8g3SyKCFcS3Eox06cBUkUVMZYQt-E-yih9sVKddYzo4AF5288',
      };
      serviceWorkerRegistration.pushManager.subscribe(options).then(
        (pushSubscription) => {
          console.log(JSON.stringify(pushSubscription));
          subscriberEndpoint = JSON.stringify(pushSubscription);

          const formdata = new FormData();
          formdata.append('endpoint', subscriberEndpoint);
          fetch('./serve/subscriberPush.php', {
            method: "POST",
            body: formdata
          }).then((res) => {
            return res.text()
          }).then(data => console.log(data)).catch(err => console.log(err));

        });
    });
}




















window.addEventListener('beforeinstallprompt', (e) => {
  // Prevent Chrome 67 and earlier from automatically showing the prompt
  e.preventDefault();
  // Stash the event so it can be triggered later.
  deferredPrompt = e;
  // Update UI to notify the user they can add to home screen
  if(screen.width < 761){

    addBtnPop = document.getElementById("teafweb-pop1");
    installBtn = document.getElementById("install");
    cancelBtn = document.getElementById("cancel");
    addBtnPop.style.display = "block";
    cancelBtn.addEventListener('click', () => {
      addBtnPop.style.display = "none";
    })

  installBtn.addEventListener('click', () => {
    // hide our user interface that shows our A2HS button
    addBtnPop.style.display = 'none';
    // Show the prompt
    deferredPrompt.prompt();
    // Wait for the user to respond to the prompt
    deferredPrompt.userChoice.then((choiceResult) => {
      if (choiceResult.outcome === 'accepted') {
        console.log('User accepted the A2HS prompt');
      } else {
        console.log('User dismissed the A2HS prompt');
      }
      deferredPrompt = null;
    });
  });
}
});

















const newApi = ()=>{

    const options = {
        method: 'GET',
       /* headers: {
            'X-BingApis-SDK': 'true',
            'X-RapidAPI-Key': '404ab4a06bmsh4e29be02190fcbfp18cafbjsnc1c77480ee9b',
            'X-RapidAPI-Host': 'bing-news-search1.p.rapidapi.com'
        }*/
        headers: {
		'X-BingApis-SDK': 'true',
		'X-RapidAPI-Key': '71d0566427msh1869757e063dcaep162963jsn5e1d2908f44c',
		'X-RapidAPI-Host': 'bing-news-search1.p.rapidapi.com'
	}
    };

    fetch('https://bing-news-search1.p.rapidapi.com/news?safeSearch=Off&textFormat=Raw&mkt=en-IN', options)
        .then(response => response.json())
        .then((response) => {
            console.log(response);
            var newsData = response.value;
            console.log(newsData);
            let i = 0;
            let j = '';
            let im = '';
            newsData.forEach((val) => {
                j = `p${i}`;
                im = `im${i}`;
                if (val.image.thumbnail.contentUrl) {
                    document.getElementById(j).innerText = val.name;
                    document.getElementById(im).src = val.image.thumbnail.contentUrl;
                    i = i + 1;
                }

            })


        })
        .catch(err => console.error(err));

}
