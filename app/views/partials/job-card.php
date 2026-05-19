<?php
$location = htmlspecialchars($job->city ?: $job->state ?: $job->address ?: 'Remote');
$salary = '$' . htmlspecialchars(number_format((float)$job->salary, 0));
$desc = strip_tags((string) $job->description);
if (strlen($desc) > 120) {
    $desc = substr($desc, 0, 117) . '...';
}
$tags = trim((string) ($job->tags ?? ''));
?>
<article class="group relative overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm transition hover:shadow-lg">
    <a href="/listings/<?= htmlspecialchars($job->id) ?>" class="absolute inset-0 z-10 rounded-3xl" aria-label="View role <?= htmlspecialchars($job->title) ?>"></a>
    <div class="relative grid gap-4 p-5 sm:grid-cols-[1.5fr_0.9fr] sm:items-start sm:p-6">
        <div class="min-w-0">
            <div class="flex flex-wrap items-center gap-2">
                <h2 class="text-base font-semibold text-slate-900">
                    <?= htmlspecialchars($job->title) ?>
                </h2>
                <?php if ($tags !== ''): ?>
                    <span class="rounded-full bg-slate-100 px-2 py-0.5 text-xs font-medium text-slate-600"><?= htmlspecialchars($tags) ?></span>
                <?php endif; ?>
            </div>
            <?php if (!empty($job->company)): ?>
                <p class="mt-2 text-sm text-slate-500">
                    <i class="fa fa-building mr-1 text-xs text-slate-400" aria-hidden="true"></i><?= htmlspecialchars($job->company) ?>
                </p>
            <?php endif; ?>
            <p class="mt-4 line-clamp-3 text-sm leading-6 text-slate-600">
                <?= htmlspecialchars($desc) ?>
            </p>
            <div class="mt-4 flex flex-wrap gap-2">
                <div class="inline-flex flex-wrap items-center gap-2 rounded-full bg-white px-3 py-2 text-xs font-semibold text-slate-700 ring-1 ring-slate-200">
                    <i class="fa fa-location-dot text-slate-400" aria-hidden="true"></i>
                    <?= $location ?>
                </div>
                <div class="inline-flex items-center gap-2 rounded-full bg-brand-50 px-3 py-2 text-xs font-semibold text-brand-800 ring-1 ring-brand-100">
                    <?= $salary ?>
                </div>
            </div>
        </div>

    </div>
</article>
