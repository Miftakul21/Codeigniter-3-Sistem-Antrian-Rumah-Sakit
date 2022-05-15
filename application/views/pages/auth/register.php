    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Register</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <label for="Email">Email*</label>
                                            <input type="email" class="form-control form-control-user"
                                                placeholder="Email Anda...">
                                        </div>
                                        <div class="form-group">
                                            <label for="Nama">Nama*</label>
                                            <input type="text" class="form-control form-control-user"
                                                placeholder="Nama Anda...">
                                        </div>
                                        <div class="form-group">
                                            <label for="Tanggal">Tanggal*</label>
                                            <input type="date" class="form-control form-control-user"
                                                 placeholder="Tanggal Lahir Anda...">
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis_kelamin">Jenis Kelamin</label><br>
                                            <input type="radio" name="" id="jenis_kelamin">  Laki - Laki
                                            <input type="radio" name="" id="jenis_kelamin">  Perempuan
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password*</label>
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        
                                        <button type="submit" " class="btn btn-success btn-user btn-block">
                                            Register
                                        </button>
                                        <hr>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        Sudah Punya akun? <a class="small" href="<?= base_url('login'); ?>" style="font-size: 16px;">Login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
