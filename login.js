
const login = document.getElementById('login')
const daftar = document.getElementById('daftar')
const b = document.querySelector('#b')
const container = document.getElementById('container')


const isi = document.createElement('div')
isi.innerHTML = `
<div class="container d-flex align-items-center justify-content-center" style="height: 100%;">
<div id="daftar" class="row shadow-lg h-75 mx-auto d-flex align-items-center justify-content-center" style="border-radius: 15px; width: 80vw;background-image: url(gambar/bg2.jpg); background-size: cover;">
    <div class="col ms-5">
        <h1 class="mb-5"><b>Sign Up</b></h1>
        <form action="" method="post">
            <div class="mb-4 row">
                <label for="inputUsername" class="col-sm-2 col-form-label"><i class="bi bi-card-heading"></i></label>
                <div class="col-sm-10">
                  <input type="number" class="form-control border border-none" name="norek" placeholder="No Rekam Medis">
                </div>
              </div>
            <div class="mb-4 row">
                <label for="inputUsername" class="col-sm-2 col-form-label"><i class="bi bi-person"></i></label>
                <div class="col-sm-10">
                  <input type="text" class="form-control border border-none" name="nama" placeholder="Nama">
                </div>
              </div>
              <div class="mb-4 row">
                <label for="inputEmail" class="col-sm-2 col-form-label"><i class="bi bi-envelope"></i></label>
                <div class="col-sm-10">
                  <input type="Email" class="form-control" name="email" placeholder="Email">
                </div>
              </div>
              <div class="mb-4 row">
                <label for="inputPassword" class="col-sm-2 col-form-label"><i class="bi bi-lock"></i></label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" name="pass" placeholder="Password">
                </div>
              </div>
              <div class="mb-4 row">
                <label for="inputConfirm" class="col-sm-2 col-form-label"><i class="bi bi-calendar"></i></label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" name="tgl" placeholder="Tanggal Lahir">
                </div>
              </div>
              <button type="submit" name="daftar" class="btn bg-dark text-light">Submit</button>
        </form>
    </div>
    <div class="col ms-5">
        <img src="gambar/ts.png" alt="" srcset="">
        <p class="mt-3"><a class="link-underline-dark mt-5 ms-5 text-dark text-center" href="login.php">Saya Sudah Punya Akun</a></p>
    </div>
</div>`

b.addEventListener('click', function () {
    login.remove()
    container.appendChild(isi)
})


