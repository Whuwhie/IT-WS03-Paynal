<?= loadPartial("head"); ?>

<?= loadPartial("navbar"); ?>

<?= loadPartial("showcase-search"); ?>

<?= loadPartial("top-banner"); ?>

<main class="flex-1 py-8">
    <div class="mx-auto max-w-7xl px-3">
        <header class="mb-6 flex flex-col gap-2 border-b border-slate-200 pb-4 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <p class="text-xs font-semibold uppercase tracking-wider text-brand-700">Latest</p>
                <h2 class="text-xl font-bold tracking-tight text-slate-900">Recent openings</h2>
                <p class="mt-1 text-sm text-slate-500">Newly posted roles on SkillSync</p>
            </div>
            <a href="/listings" class="inline-flex items-center gap-2 rounded-2xl px-4 py-2 text-sm font-semibold text-brand-700 transition hover:text-brand-800">
                View all jobs <i class="fa fa-arrow-right text-xs" aria-hidden="true"></i>
            </a>
        </header>

        <?php $list = isset($listings) ? $listings : []; ?>
        <?php if (empty($list)): ?>
            <div class="rounded-lg border border-dashed border-slate-300 bg-white px-6 py-12 text-center">
                <i class="fa fa-inbox mb-3 text-2xl text-slate-300" aria-hidden="true"></i>
                <p class="font-medium text-slate-700">No jobs posted yet</p>
                <p class="mt-1 text-sm text-slate-500">Check back soon or post the first opening.</p>
                <a href="/listings/create" class="mt-4 inline-flex items-center gap-2 rounded-md bg-brand-700 px-4 py-2 text-sm font-medium text-white hover:bg-brand-800">
                    Post a Job
                </a>
            </div>
        <?php else: ?>
            <div class="space-y-3">
                <?php foreach ($list as $listing): ?>
                    <?php loadPartial('job-card', ['job' => $listing]); ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</main>

<?= loadPartial("bottom-banner"); ?>

<?= loadPartial("footer"); ?>
