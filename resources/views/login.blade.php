@include('_header')

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">


<form action ="/uye-kontrol" method="POST">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-white">Mail Adresi</label>
    <input name="eposta" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-white">Parola</label>
    <input name="parola" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label text-white" for="exampleCheck1">Oturumu açık tut.</label>
  </div>
  <button type="submit" class="btn btn-success text-white">Giriş Yap</button>
  <br></br>
</form>
         
        </div>
      </div>
    </div>
  </div>
  
@include('_footer')