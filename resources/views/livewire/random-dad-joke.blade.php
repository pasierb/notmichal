<div>
    @if ($joke)
        <div class="card bg-white w-full max-w-2xl shadow-lg">
            <div class="card-body">
                <h2 class="card-title">Random dad joke</h2>

                <div class="py-4 px-6 text-lg rounded-lg font-mono my-4 bg-black text-white">
                    @if ($joke->image)
                        <img src="{{ Storage::url($joke->image) }}" alt="Joke Image" class="w-full h-auto mb-4">
                    @endif

                    <div>
                        {!! Illuminate\Support\Str::markdown($joke->text_content) !!}
                    </div>
                </div>

                <div class="card-actions justify-end">
                    <button wire:click="selectNewJoke" class="btn btn-primary">Another one</button>
                </div>
            </div>
        </div>
    @endif
</div>
