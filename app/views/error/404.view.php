<?= loadPartial("head") ?>
<?= loadPartial("navbar") ?>

<main class="flex flex-1 items-center justify-center px-4 py-16">
    <div class="max-w-md rounded-xl border border-dashed border-slate-300 bg-white px-8 py-12 text-center">
        <p class="text-5xl font-bold text-slate-200">404</p>
        <h1 class="mt-4 text-lg font-semibold text-slate-900">Page not found</h1>
        <p class="mt-2 text-sm text-slate-500">The page you requested does not exist or may have moved.</p>
        <div class="mt-6 flex flex-col gap-2 sm:flex-row sm:justify-center">
            <a href="/" class="inline-flex items-center justify-center rounded-md bg-brand-700 px-4 py-2 text-sm font-medium text-white hover:bg-brand-800">Back to home</a>
            <a href="/listings" class="inline-flex items-center justify-center rounded-md border border-slate-200 px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-50">Browse jobs</a>
        </div>
    </div>
</main>

<?= loadPartial("footer") ?>
