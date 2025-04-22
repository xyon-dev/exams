//Views is an object of templates. Object keys are named after view titles.

export const Views = {
  login: `<form id="register-form" style="margin: 10vh auto 0; width: 500px;" action="#" name="register-form" method="POST">
    <div class="mb-3">
      <label for="username" class="form-label">Name</label>
      <input type="text" class="form-control" id="username" name="username" autocomplete="on">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" autocomplete="on">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <button id="register-form-submit" type="submit" class="btn btn-primary">Submit</button>
  </form>`
  ,
  test: `<h1>test</h1>`
}