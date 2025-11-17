<x-layout.main title="Login">
    <h1>login</h1>
    <form action="{{ route('auth.login') }}" method="POST">
        @csrf
        <x-forms.input name="email" label="email" />
        <x-forms.input name="password" label="password" type="password" />
        <button type="submit">login</button>
    </form>
</x-layout.main>
