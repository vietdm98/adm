<div class="setting--box container">
    <form action="" method="POST">
        <div class="row">
            <div class="col-4">
                <div class="box-info">
                    <div class="box-avatar text-center">
                        <div class="box-avatar--img">
                            <img class="w-75" src="{{ asset('image/adm/ai_bg.png') }}" alt="Icon">
                        </div>
                        <h3>{{ user()->fullname }}</h3>
                    </div>
                    <div class="box-title text-center">
                        <p class="mb-0">Total invest: 0.00</p>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="form-info">
                    <div class="form-group">
                        <label for="reflink">Reflink</label>
                        <input type="text" class="form-control" id="reflink" value="{{ user()->reflink }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ user()->email }}">
                    </div>
                    <div class="form-group">
                        <label for="fullname">Fullname</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" value="{{ user()->fullname }}">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ user()->phone }}">
                    </div>
                </div>
            </div>
            <div class="col-12 text-right">
                <div class="btn btn-primary btn-gradient">Update</div>
            </div>
        </div>
    </form>
</div>
