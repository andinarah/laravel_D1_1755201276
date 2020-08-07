@if($message = Session::get('succes'))
    <!-- Alert -->
    <p>
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    </p>
@endif 