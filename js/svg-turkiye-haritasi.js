function svgturkiyeharitasi() {
  const element = document.querySelector('#svg-turkiye-haritasi');
  const info = document.querySelector('.il-isimleri');

  element.addEventListener(
    'mouseover',
    function (event) {
      if (event.target.tagName === 'path' && event.target.parentNode.id !== 'guney-kibris') {
        const cityId = event.target.parentNode.getAttribute('data-plakakodu');
        const cityName = event.target.parentNode.getAttribute('data-iladi');

        fetchPersonalCount(cityId, cityName);
      }
    }
  );

  element.addEventListener(
    'mousemove',
    function (event) {
      info.style.top = event.pageY + 25 + 'px';
      info.style.left = event.pageX + 'px';
    }
  );

  element.addEventListener(
    'mouseout',
    function () {
      info.innerHTML = '';
    }
  );

  function fetchPersonalCount(cityId, cityName) {
    // Fetch personal count from your server
    fetch('getPersonalCountByCityId.php?cityId=' + cityId)
      .then(response => response.json())
      .then(data => {
        const count = data.count || 0;
        // Update the content of .il-isimleri with the fetched count
        info.innerHTML = '<div>' + cityName + '<br> Personel sayısı: ' + count + '</div>';
      })
      .catch(error => {
        console.error('Error fetching personal count', error);
      });
  }
}
