<div>

    <div class="card bg-white w-96 shadow-lg">
        <div class="card-body">
            <h2 class="card-title">Random dad joke</h2>
            <div class="prose my-4">
                {!! Illuminate\Support\Str::markdown($joke->text_content) !!}
            </div>
            <div class="card-actions justify-end">
                <button class="btn btn-primary">Another one</button>
            </div>
        </div>
    </div>
</div>
