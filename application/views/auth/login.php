		  
		  <div class="row">
            <div class="col col-login mx-auto">
              <div class="text-center mb-6">
                <img src="<?=base_url()?>assets/brand/tabler.svg" class="h-6" alt="">
              </div>
              <?=form_open('auth/login',array('class'=>'card')); ?>
                <div class="card-body p-6">
                  <div class="card-title">Log masuk ke akaun anda</div>
                  <div class="form-group">
                    <label class="form-label">Emel</label>
                    <input type="email" name="email" value="<?=set_value('email')?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan emel">
                    <?= form_error('email'); ?>
                  </div>
                  <div class="form-group">
                    <label class="form-label">
                      Kata laluan
                      <a href="<?=base_url()?>auth/lupa" class="float-right small">Saya lupa kata laluan</a>
                    </label>
                    <input type="password" name="password" value="<?=set_value('password')?>" class="form-control" id="exampleInputPassword1" placeholder="Kata laluan">
                    <?= form_error('password'); ?>
                  </div>
                  <div class="form-group">
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" />
                      <span class="custom-control-label">Ingat saya</span>
                    </label>
                  </div>
                  <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block">Log masuk</button>
                  </div>
                </div>
              <?=form_close(); ?>
              <div class="text-center text-muted">
                Belum ada akaun? <a href="<?=base_url()?>register">Daftar akaun</a>
              </div>
            </div>
          </div>
          
          
        