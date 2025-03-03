
! function (f, b, e, v, n, t, s) {
    if (f.fbq) return;
    n = f.fbq = function () {
        n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
    };
    if (!f._fbq) f._fbq = n;
    n.push = n;
    n.loaded = !0;
    n.version = '2.0';
    n.queue = [];
    t = b.createElement(e);
    t.async = !0;
    t.src = v;
    s = b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t, s)
}(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1129816030395640');
fbq('track', 'PageView');

(function (w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
})(window, document, 'script', 'dataLayer', 'GTM-TQQWZN8K');
function hideSearch(mobile) {
  setTimeout(function() {
    const dropdown = mobile ? document.getElementById('dropdown-search-mobile') : document.getElementById('dropdown-search');
    dropdown.style.display = 'none';
  }, 2000); // 2000 milissegundos = 2 segundos
}

function searchFunction(input, mobile) {
  if (input != '') {
    fetch('https://okintercambio.com.br/wp-json/posts/search/' + input).then(response => {
      if (!response.ok) {
        throw new Error('Network response was not ok');
      }
      return response.json();
    }).then(data => {
      const options = data;
      const dropdown = mobile ? document.getElementById('dropdown-search-mobile') : document.getElementById('dropdown-search');
      dropdown.innerHTML = '';
      for (let op of options) {
        dropdown.innerHTML += `
                  <a href="${op.link}">
                      <p>${op.title}</p>
                  </a>`;
      }
      dropdown.style.display = input ? 'block' : 'none';
    }).catch(error => {
      dropdown.innerHTML = ' < p > Nenhum encontrado < /p>';
    });
  } else {
    const dropdown = mobile ? document.getElementById('dropdown-search-mobile') : document.getElementById('dropdown-search');
    dropdown.style.display = 'none';
  }
}

const inputElement = document.querySelector('#orcamento-tel-id');

if (inputElement) {
    window.intlTelInput(inputElement, {
            initialCountry: "br",
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@19.2.20/build/js/utils.js",
            countrySearch: true,
            useFullscreenPopup: false,
            showSelectedDialCode: true, // exibir o código do país separado do número
    });
}