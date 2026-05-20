<?= loadPartial("head"); ?>

<?= loadPartial("navbar"); ?>

<?php
    $kw = $keywords ?? ($_GET['keywords'] ?? '');
    $loc = $location ?? ($_GET['location'] ?? '');
?>

<main class="flex-1 py-8">
    <div class="mx-auto max-w-7xl px-3">
        <header class="mb-6">
            <p class="text-xs font-semibold uppercase tracking-wider text-brand-700">Browse</p>
            <h1 class="text-2xl font-bold tracking-tight text-slate-900">Job listings</h1>
            <p class="mt-1 text-sm text-slate-500">Filter by keyword and location</p>
        </header>

        <div class="lg:grid lg:grid-cols-[18rem_minmax(0,1fr)] lg:gap-8">
            <aside class="mb-6 lg:mb-0">
                <div class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm lg:sticky lg:top-20">
                    <h2 class="text-sm font-semibold uppercase tracking-wide text-slate-500">Refine results</h2>
                    <form method="GET" action="/listings" class="mt-5 space-y-4">
                        <div>
                            <label for="filter-keywords" class="mb-2 block text-sm font-medium text-slate-700">Keywords</label>
                            <input
                                id="filter-keywords"
                                type="text"
                                name="keywords"
                                placeholder="Title or skill"
                                value="<?= htmlspecialchars($kw) ?>"
                                class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-sm text-slate-900 focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20"
                            />
                        </div>
                        <div>
                            <label for="filter-location" class="mb-2 block text-sm font-medium text-slate-700">Location</label>
                            <input
                                id="filter-location"
                                type="text"
                                name="location"
                                placeholder="City or state"
                                value="<?= htmlspecialchars($loc) ?>"
                                class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-sm text-slate-900 focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20"
                            />
                        </div>
                        <div class="space-y-3 pt-1">
                            <button type="submit" class="w-full rounded-2xl bg-brand-700 px-4 py-3 text-sm font-semibold text-white shadow-lg shadow-brand-700/10 transition hover:bg-brand-800">
                                Apply filters
                            </button>
                            <a href="/listings" class="block w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-center text-sm font-semibold text-slate-700 hover:bg-slate-50">
                                Clear filters
                            </a>
                        </div>
                    </form>
                </div>
            </aside>

            <section>
                <div class="mb-6 flex flex-col gap-3 rounded-3xl border border-slate-200 bg-white p-5 shadow-sm sm:flex-row sm:items-center sm:justify-between sm:gap-4">
                    <div>
                        <p class="text-sm text-slate-500">
                            <?php if (empty($listings)): ?>
                                <span class="font-semibold text-slate-700">0 results</span>
                            <?php else: ?>
                                <span class="font-semibold text-slate-700"><?= count($listings) ?></span> role<?= count($listings) === 1 ? '' : 's' ?> found
                            <?php endif; ?>
                        </p>
                        <?php if ($kw || $loc): ?>
                            <p class="mt-1 text-sm text-slate-500">Showing results for
                                <?php if ($kw): ?>"<?= htmlspecialchars($kw) ?>"<?php endif; ?>
                                <?php if ($kw && $loc): ?> and <?php endif; ?>
                                <?php if ($loc): ?>"<?= htmlspecialchars($loc) ?>"<?php endif; ?>
                            </p>
                        <?php endif; ?>
                    </div>
                    <div class="flex flex-wrap items-center gap-3">
                        <a href="/listings" class="rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm font-semibold text-slate-700 hover:bg-slate-50">Clear filters</a>
                        <a href="/listings/create" class="inline-flex items-center gap-2 rounded-2xl bg-brand-700 px-4 py-3 text-sm font-semibold text-white hover:bg-brand-800">
                            <i class="fa fa-plus text-xs" aria-hidden="true"></i> Post a job
                        </a>
                    </div>
                </div>

                <?php if (empty($listings)): ?>
                    <div class="rounded-3xl border border-dashed border-slate-300 bg-white px-6 py-16 text-center shadow-sm">
                        <i class="fa fa-search mb-4 text-4xl text-slate-300" aria-hidden="true"></i>
                        <p class="text-lg font-semibold text-slate-800">No listings match your search</p>
                        <p class="mt-2 text-sm text-slate-500">Try different keywords, tweak the location, or clear filters.</p>
                        <a href="/listings" class="mt-5 inline-flex rounded-2xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-brand-700 hover:bg-slate-50">Clear filters</a>
                    </div>
                <?php else: ?>
                    <div class="space-y-4">
                        <?php foreach ($listings as $job): ?>
                            <?php loadPartial('job-card', ['job' => $job]); ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </section>
        </div>
    </div>
</main>

<?= loadPartial("footer"); ?>
