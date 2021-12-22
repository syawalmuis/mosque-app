
// baseurl
const __url = document.querySelector('#__url').value;

// ======== load ========
// deklarasi dom yang ingin di ubah
const __total = document.querySelector('.sumbangan-card #__total');
const __terbilang = document.querySelector('.sumbangan-card #__terbilang');
const __filter = document.querySelector('.sumbangan-card h5>span');

// load data sumbangan hari ini
const __today = () => {
    fetch(`${__url}/sumbangan/today`)
        .then(response => response.json())
        .then(result => {
            __total.innerHTML = `Rp. ${result.data[0]}`;
            __terbilang.innerHTML = `${result.data[1]}`;
            __filter.innerHTML = '| Hari ini';
        })
}
// __today() // end load data sumbangan /hari ini

// load data sumbangan bulan ini
const __thisMonth = () => {
    fetch(`${__url}/sumbangan/month`)
        .then(response => response.json())
        .then(result => {
            // console.log(result);
            __total.innerHTML = `Rp. ${result.data[0]}`;
            __terbilang.innerHTML = `${result.data[1]}`;
            __filter.innerHTML = '| Bulan ini';
        })
} // end load data sumbangan bulan ini

