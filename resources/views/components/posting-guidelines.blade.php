<div x-data="{open:false}" class="mb-5">
    <p>Please read the&nbsp;<span class="text-indigo-500 font-semibold cursor-pointer"  x-on:click="open = ! open">Banter Posting Guidelines</span> before posting!</p>
    <ul class="list-disc leading-relaxed" x-show="open">
        <li>Title must be meaningful and over 5 characters long</li>
        <li>Content must be over 5 characters long</li>
        <li>Image upload is optional. Uploaded file must be a image (jpg, jpeg, png, bmp, gif, svg, or webp). No explicit content allowed.</li>
        <li>Maximum file size is 800KB</li>
        <li>Be respectful :)</li>
    </ul>
</div>