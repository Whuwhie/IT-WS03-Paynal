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

        <div class="lg:grid lg:grid-cols-[15rem_1fr] lg:gap-8">
            <aside class="mb-6 lg:mb-0">
                <div class="rounded-lg border border-slate-200 bg-white p-4 lg:sticky lg:top-20">
                    <h2 class="text-xs font-semibold uppercase tracking-wider text-slate-500">Refine results</h2>
                    <form method="GET" action="/listings" class="mt-3 space-y-3">
                        <div>
                            <label for="filter-keywords" class="mb-1 block text-xs font-medium text-slate-600">Keywords</label>
                            <input
                                id="filter-keywords"
                                type="text"
                                name="keywords"
                                placeholder="Title or skill"
                                value="<?= htmlspecialchars($kw) ?>"
                                class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20"
                            />
                        </div>
                        <div>
                            <label for="filter-location" class="mb-1 block text-xs font-medium text-slate-600">Location</label>
                            <input
                                id="filter-location"
                                type="text"
                                name="location"
                                placeholder="City or state"
                                value="<?= htmlspecialchars($loc) ?>"
                                class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20"
                            />
                        </div>
                        <div class="flex flex-col gap-2 pt-1">
                            <button type="submit" class="w-full rounded-md bg-brand-700 px-3 py-2 text-sm font-medium text-white hover:bg-brand-800">
                                Apply filters
                            </button>
                            <a href="/listings" class="w-full rounded-md border border-slate-200 px-3 py-2 text-center text-sm font-medium text-slate-600 hover:bg-slate-50">
                                Clear
                            </a>
                        </div>
                    </form>
                    <p class="mt-4 border-t border-slate-100 pt-4 text-xs leading-relaxed text-slate-500">
                        <i class="fa fa-lightbulb mr-1 text-brand-600" aria-hidden="true"></i>
                        Tip: try a city name or job title keyword.
                    </p>
                </div>
            </aside>

            <section>
                <div class="mb-4 flex items-center justify-between gap-2">
                    <p class="text-sm text-slate-500">
                        <?php if (empty($listings)): ?>
                            <span class="font-medium text-slate-700">0 results</span>
                        <?php else: ?>
                            <span class="font-medium text-slate-700"><?= count($listings) ?></span> role<?= count($listings) === 1 ? '' : 's' ?> found
                        <?php endif; ?>
                    </p>
                    <a href="/listings/create" class="hidden items-center gap-1 text-sm font-medium text-brand-700 hover:text-brand-800 sm:inline-flex">
                        <i class="fa fa-plus text-xs" aria-hidden="true"></i> Post a job
                    </a>
                </div>

                <?php if (empty($listings)): ?>
                    <div class="rounded-lg border border-dashed border-slate-300 bg-white px-6 py-14 text-center">
                        <i class="fa fa-search mb-3 text-3xl text-slate-300" aria-hidden="true"></i>
                        <p class="font-medium text-slate-800">No listings match your search</p>
                        <p class="mt-1 text-sm text-slate-500">Try different keywords or clear filters.</p>
                        <a href="/listings" class="mt-4 inline-block text-sm font-medium text-brand-700 hover:text-brand-800">Clear filters</a>
                    </div>
                <?php else: ?>
                    <div class="space-y-3">
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
