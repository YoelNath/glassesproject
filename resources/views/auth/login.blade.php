@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<style>
    .background {
        background-color: #00a888;
        padding: 20px 0 60px;
        height: 100vh;
        display: flex;
        justify-content: center;
    }

    .login {
        background: #1c5253;
        width: 60vw;
        min-width: 400px;
        margin: 5vh 2vw;
        padding: 5vh 2vw;
        color: white;
        border: 2px solid black;
        border-radius: 20px;
    }
</style>

@include('./components/bsNav')
<div class="background">
    <div class="login">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text" style="color: white">We'll never share your email with anyone else.
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@include('./components/footer')
