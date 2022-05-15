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
                                        <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <label for="no_rm">No. RM*</label>
                                            <input type="email" class="form-control form-control-user"
                                                placeholder="Nomor Rekam Medis">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password*</label>
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-success btn-user btn-block">
                                            login
                                        </button>
                                        <hr>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        Belum Punya akun? <a class="small" href="<?= base_url('register'); ?>" style="font-size: 16px;">Register</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
