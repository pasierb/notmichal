<div class="card bg-white w-full max-w-2xl shadow-lg">
    <div class="card-body">
        <h2 class="card-title">Random dad joke</h2>

        <div class="py-4 px-6 text-lg rounded-lg font-mono my-4 bg-black text-white">
            {!! Illuminate\Support\Str::markdown($joke->text_content) !!}
        </div>

        <div class="card-actions justify-end">
            <button class="btn btn-primary">Another one</button>
        </div>
    </div>
</div>
