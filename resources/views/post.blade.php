<x-layout>
    <article>
        <h1>{!! $post->title !!}</h1>
        <div>
          {!! $post->body !!}
        </div>
    </article>

    <p><a href="/">Back</a></p>
</x-layout>
