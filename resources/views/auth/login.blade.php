<x-app-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="my-0">ログイン</h4>
                    </div>
                    <div class="card-body p-4">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">メールアドレス</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">パスワード</label>
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">ログイン状態を保持する</label>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">ログイン</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
