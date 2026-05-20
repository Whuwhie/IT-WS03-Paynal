<?= loadPartial("head") ?>
<?= loadPartial("navbar") ?>

<main class="flex min-h-[70vh] items-center justify-center px-4 py-20">
    <div class="w-full">
        <div class="mx-auto max-w-4xl rounded-2xl bg-white/90 px-8 py-16 text-center shadow-lg">
            <p class="text-8xl font-extrabold text-slate-200 leading-none">404</p>
            <h1 class="mt-6 text-4xl font-semibold text-slate-900">Page not found</h1>
            <p class="mt-4 text-lg text-slate-600 max-w-2xl mx-auto">The page you requested doesn't exist or has been moved. Try returning to the home page or browse available roles.</p>

            <div class="mt-8 flex justify-center gap-4">
                <a href="/" class="inline-flex items-center gap-2 rounded-2xl bg-brand-700 px-5 py-3 text-base font-semibold text-white shadow-md hover:bg-brand-800">Back to home</a>
                <a href="/listings" class="inline-flex items-center gap-2 rounded-2xl border border-slate-200 bg-white px-5 py-3 text-base font-semibold text-slate-700 hover:bg-slate-50">Browse jobs</a>
            </div>
        </div>
    </div>
</main>

<?= loadPartial("footer") ?>
