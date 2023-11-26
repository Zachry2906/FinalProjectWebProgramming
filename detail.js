const klikk = document.querySelectorAll('.klikk');
const cek = document.querySelectorAll('.cek');
const penuh = document.querySelectorAll('.penuh');

penuh.forEach(p => {
    p.addEventListener('click', function () {
        alert('Maaf, Pasien sudah penuh')
        p.style.backgroundColor = ' #919191'
    })
}
)

klikk.forEach(klik => {
    klik.addEventListener('click', function () {
        klikk.forEach(klik => 
            klik.classList.remove('aktif')
        )
        cek.forEach(c => 
            c.checked = false
        )
    })

    klik.addEventListener('click', function (e) {
        klik.classList.toggle('aktif')
        cek.forEach(c => 
            c.checked = false
        )
    })

}
)
