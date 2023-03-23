<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>L21 Syair | REGISTER</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

  </head>
  <body>
    <div class="row justify-content-center">
    <div class="col-lg-5">
      <main class="form-registration w-100 m-auto">
        <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
        <form action="/register" method="post">
        @csrf
          {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
          <div class="form-floating">
              <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="name" required value="{{ old('name') }}">
              <label for="name" class="text-black">name</label>
              @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="text" name="username" class="form-control  @error('username') is-invalid @enderror" id="username" placeholder="username" required value="{{ old('username') }}">
              <label for="username" class="text-black">username</label>
              @error('username')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          <div class="form-floating">
            <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
            <label for="email" class="text-black">Email address</label>
            @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control rounded-bottom  @error('password') is-invalid @enderror" id="password" placeholder="Password" required >
            <label for="password" class="text-black">Password</label>
            @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
      
          <div class="checkbox mb-3">
            {{-- <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label> --}}
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
          {{-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p> --}}
        </form>
        <small class="d-block text-center mt-2">already registered? <a href="/login">Login Now!</a></small>
      </main>
    </div>
  </div>

  
  <script src="/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>