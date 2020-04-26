    <!-- Main content -->
    <section class="content">

    	<!-- Default box -->
    	<div class="box">
    		<div class="box-header with-border">
    			<h3 class="box-title"><?= $boxtitle; ?></h3>
    				</div>
    				<div class="box-body">
    					<form role="form" method="post" action="">
    						<div class="box-body">
    							<div class="form-group">
    								<label for="nisn">NISN</label>
    								<input type="text" class="form-control" id="nisn" name="nisn" placeholder="NISN" value="<?= $siswa['nisn']; ?>" readonly>
    								<small class="form-text text-danger"><?= form_error('nisn'); ?></small>
    							</div>
    							<div class="form-group">
    								<label for="nis">NIS</label>
    								<input type="number" class="form-control" id="nis" name="nis" placeholder="NIS" value="<?= $siswa['nis']; ?>">
    								<small class="form-text text-danger"><?= form_error('nis'); ?></small>
    							</div>
    							<div class="form-group">
    								<label for="nopes">No. Peserta</label>
    								<input type="text" class="form-control" id="nopes" name="nopes" placeholder="No. Peserta" value="<?= $siswa['nopes']; ?>">
    								<small class="form-text text-danger"><?= form_error('nopes'); ?></small>
    							</div>
    							<div class="form-group">
    								<label for="nama_siswa">Nama Siswa</label>
    								<input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="Nama Siswa" value="<?= $siswa['nama_siswa']; ?>">
    								<small class="form-text text-danger"><?= form_error('nama_siswa'); ?></small>
    							</div>
    							<div class="form-group">
    								<label for="tmpt_lahir">Tempat Lahir</label>
    								<input type="text" class="form-control" id="tmpt_lahir" name="tmpt_lahir" placeholder="Tempat Lahir" value="<?= $siswa['tmpt_lahir']; ?>">
    								<small class="form-text text-danger"><?= form_error('tmpt_lahir'); ?></small>
    							</div>
    							<div class="form-group">
    								<label for="tgl_lahir">Tanggal Lahir</label>
    								<input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir" value="<?= $siswa['tgl_lahir']; ?>">
    								<small class="form-text text-danger"><?= form_error('tgl_lahir'); ?></small>
    							</div>
    							<div class="form-group">
    								<label for="nama_ayah">Nama Ayah</label>
    								<input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Nama Ayah" value="<?= $siswa['nama_ayah']; ?>">
    								<small class="form-text text-danger"><?= form_error('nama_ayah'); ?></small>
    							</div>
    						</div>
    						<!-- /.box-body -->

    						<div class="box-footer pull-right">
    							<a href="<?= base_url('admin/siswa'); ?>" class="btn btn-default">Cancel</a>
    							<button type="submit" class="btn btn-success">Save</button>
    						</div>
    					</form>
    				</div>
    				<!-- /.box-body -->
    			</div>
    			<!-- /.box -->
    		</section>
    <!-- /.content -->