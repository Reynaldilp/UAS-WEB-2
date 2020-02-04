<div class="slide-1" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <?= $this->session->flashdata("message"); ?>
              <form class="user" method="post" action="<?php echo base_url('Auth/register') ?>">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="npm" name="npm" placeholder="NPM Untuk Username anda" required="required">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Anda" required="required">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" required="required">
                </div>

                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Daftar Akun
                </button> 
            </form>

              <hr>
              <div class="text-center">
                <a class="small" href="<?= base_url('auth') ?>">Sudah Punya Akun? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>