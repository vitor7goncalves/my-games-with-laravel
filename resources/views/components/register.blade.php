<div class="flex flex-col justify-content-center align-items-center mx-auto w-50 min-vh-25 border rounded border-gray-300 p-5 mb-5">
        <h2 class="text-center">Create your account</h2>
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" placeholder="Your name" class="form-control" required>
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" placeholder="Your email" class="form-control" required>
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" placeholder="Your password" class="form-control" required>
        <label for="password_confirmation" class="form-label">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm your password" class="form-control" required>
        <button class="btn btn-primary mt-3 w-100" type="submit">Send</button>
        <p class="text-center mt-3">You have an account?</p>
        <a href="/login" class="btn btn-link mt-1 w-100 text-decoration-none">Enter your account</a>
</div>