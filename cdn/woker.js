
addEventListener("fetch", (event) => {
  event.respondWith(
    handleRequest(event.request)
  );
});


function getHeaders(request) {
let headersObject = Object.fromEntries(request.headers)
let requestHeaders = JSON.stringify(headersObject, null, 0)
return requestHeaders
}


async function handleRequest(request) {

  const { pathname } = new URL(request.url);

  const body = {
    "content": null,
    "embeds": [
      {
        "title":"CDN запит",
        "description": "IP: " + request.headers.get('x-real-ip') + "\nURL: " + pathname + "\nХейдери: " + getHeaders(request),
        "color":10857488
      }
    ],
    "attachments":[]
  }

  const init = {
    body: JSON.stringify(body),
    method: 'POST',
    headers: {
      'content-type': 'application/json;charset=UTF-8',
    },
  };
  const response = await fetch('https://discord.com/api/webhooks/1010445866684923994/F9qNpDJ-iV21kW5NLSGRFEnGCeAuqx-C5g7V1_lIltcpF9O3ciLcHArfqR3WyuSdm7NN', init);
 
  console.log(request)

  switch (pathname) {
    case '/':
      return new Response(`
      Вітаємо в CDN-API AndriyCraft-a:
      
      Можливі запити:
      [Метод] {URL} [Пояснення]
      API:
      
      GET /api/status Статус API
      GET /api/getreviews Получити відгуки
      GET andriycraft.page/api/postreview Надіслати відгук | Вертає ТІЛЬКИ RAW відповідь

      `)
      break;
    case '/stat/forum/click':
      return new Response(`Ваш браузер не підтрмує перенаправлення. Щоб продовжити перейдіть по йому посиланні вручну: <a href="https://andriycraft.page/forum">https://andriycraft.page/forum</a>`, {
        status: 302,
        headers: {
          'Access-Control-Allow-Origin': '*',
          'content-type': 'text/html;charset=UTF-8',
          'Location': 'https://andriycraft.page/forum'
        }
      })
      break
    case '/api/status':
      return new Response(`[{"info": "OK"}]`, {
        headers: {
          'Access-Control-Allow-Origin': '*',
          'content-type': 'application/json;charset=UTF-8',
        }
      })
      break;
    case "/api/getreviews":
      return new Response(`
      <b><img src="https://andriycraft.page/proxy/?url=https://crafthead.net/avatar/THEMM_killer" style="width: 24px"></b>
<p style="color: purple"><b>THEMM_killer</b></p><p style="max-width: 500px;">
<b>Нарешті БедВарс 2.0 і The Bridge</b></p> <p style="color: gray">
<b>Оцінка: <img style="width: 17px" src="https://img.icons8.com/ios-filled/50/000000/pixel-star.png">
<img style="width: 17px" src="https://img.icons8.com/ios-filled/50/000000/pixel-star.png">
<img style="width: 17px" src="https://img.icons8.com/ios-filled/50/000000/pixel-star.png">
<img style="width: 17px" src="https://img.icons8.com/ios-filled/50/000000/pixel-star.png">
</b></p>
      `, {
    headers: {
      'Access-Control-Allow-Origin': '*',
      'content-type': 'text/html;charset=UTF-8',
    },
  })
      break;
    case '/static/css.css':
            return new Response(`
     *
{
    margin: 0;
    padding: 0;
    font-family: 'Rubik', sans-serif;
}

.navbar-link,
.header_title
{
    color: #fff
}

a
{
    color: #391f1f;
    text-decoration: none;
}

#pre-header
{
    background-color: black;
    border: 15px solid black;
}

.pre-header_content
{
    text-decoration: none;
    color: white;
}

.header
{
    padding: 20px 0;
    display: flex;
    justify-content: space-between;
    background-color: #271b1b
}

.header_title
{
    padding-left: 10px;
    margin-top: 20px
}

.navbar
{
    display: flex;
}

.navbar-link
{
    margin: 20px 30px;
    color: #fff;
    text-decoration: none;
}

.footer a
{  
    padding: 2px;
    color: rgb(70, 49, 30);
}


.footer
{
    background-color:#533e3e;
}

.screenshots_from_server_container,
.review_container
{
    display: flex;
    justify-content: center;
    align-items: center;
}

.screenshots_from_server_img
{
    padding: 13px;
}`, {
    headers: {
      'content-type': 'text/css;charset=UTF-8',
    },
  })
      break;
    case '/static/js.js':
            return new Response(`



function copyserverip() {
    const ip = prompt('IP Серверу (версія 1.9.x - 1.18.2):', 'play.andriycraft.page');
    console.log('Opened');
}

function redirect2() {
    location.href = 'https://andriycraft.page/forum';
}

function redirect3() {
    location.href = 'http://andriycraft.page/';
}

function v() {
    Swal.fire({
        title: '',
        icon: 'info',
        html:
            'Ви можете проголосовати за AndriyCraft тут: ' +
            '<br>' +
            '<br>' +
            '<a href="https://topg.org/minecraft-servers/server-630941">https://topg.org/minecraft-servers/server-630941</a> ' +
            '<a href="https://craftlist.org/andriycraft">https://craftlist.org/andriycraft</a> ' +
            '<a href="https://minecraftlist.org/vote/23704">https://minecraftlist.org/vote/23704</a> ' +
            '<a href="https://minecraft.buzz/server/3712&tab=vote">https://minecraft.buzz/server/3712&tab=vote</a> ' +
            '<a href="https://minecraftservers.biz/servers/151042/#vote_now">https://minecraftservers.biz/servers/151042/#vote_now</a> ' +
            '<a href="https://minebrowse.com/server/3463">https://minebrowse.com/server/3463</a> ' +
            '<a href="https://minecraft-mp.com/server-s284101">https://minecraft-mp.com/server-s284101</a> ' +
            '<a href="https://mclike.com/vote-190945">https://mclike.com/vote-190945</a> ' +
            '<a href="https://www.trackyserver.com/server/andriycraft-1430187">https://www.trackyserver.com/server/andriycraft-1430187</a> ' +
            '<a href="https://uk.namemc.com/server/play.andriycraft.page">https://uk.namemc.com/server/play.andriycraft.page</a> ' +
            '<a href="https://minelist.net/vote/3862">https://minelist.net/vote/3862</a> ' +
            '<a href="https://best-minecraft-servers.co/server-andriycraft.332/vote">https://best-minecraft-servers.co/server-andriycraft.332/vote</a> ' +
            '<a href="https://minecraft-server.net/vote/AndriyCraft/">https://minecraft-server.net/vote/AndriyCraft/</a> ' +
            '<a href="https://mcservertime.com/server-andriycraft.1064/vote">https://mcservertime.com/server-andriycraft.1064/vote/</a> ' +
            '<a href="https://serverlist.games/vote/5420">https://serverlist.games/vote/5420</a> ' +
            '<a href="https://mclist.io/server/27182/vote">https://mclist.io/server/27182/vote</a> ' +
            '<a href="https://mcservers.top/server/1928">https://mcservers.top/server/1928</a> ' +
            '<a href="https://mc-server-list.com/server/982/">https://mc-server-list.com/server/982/</a> ' +
            '<a href="https://topminecraftservers.org/vote/27542">https://topminecraftservers.org/vote/27542</a> ' +
            '<a href="https://topmcservers.com/server/1871/vote">https://topmcservers.com/server/1871/vote</a> ' +
            '<a href="https://mc-lists.org/server-andriycraft.3981/vote">https://mc-lists.org/server-andriycraft.3981/vote</a> ' +
            '<a href="https://www.serverpact.com/vote-47041">https://www.serverpact.com/vote-47041</a> ' +
            '<a href="https://mc-serverlisting.com/server-andriycraft.71/vote">https://mc-serverlisting.com/server-andriycraft.71/vote</a> ' +
            '<a href="https://servers-minecraft.com/vote/2038">https://servers-minecraft.com/vote/2038</a> ' +
            '<a href="https://minecraftserverslisted.com/server-andriycraft.75">https://minecraftserverslisted.com/server-andriycraft.75</a> ' +
            '<a href="https://epicminecraftservers.com/server-andriycraft.341#/votepg">https://epicminecraftservers.com/server-andriycraft.341#/votepg</a> ',
        showCloseButton: true,
        showCancelButton: false,
        focusConfirm: false,
        confirmButtonText:
            'Ок',
        confirmButtonAriaLabel: 'Ок',
        cancelButtonText:
            'Закрити',
        cancelButtonAriaLabel: 'Закрити'
    });
}`, {
    headers: {
      'content-type': 'application/javascript;charset=UTF-8',
    },
  })
      break;
    default:
      throw new Error('404')
  }


  return fetch("https://welcome.developers.workers.dev");
}
