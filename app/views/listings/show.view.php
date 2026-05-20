<?= loadPartial("head"); ?>
<?= loadPartial("navbar"); ?>

<main class="flex-1 py-8">
    <div class="mx-auto max-w-7xl px-3">
        <a href="/listings" class="mb-6 inline-flex items-center gap-2 rounded-2xl px-4 py-3 text-sm font-semibold text-slate-700 transition hover:text-slate-900">
            <i class="fa fa-arrow-left text-xs" aria-hidden="true"></i> Back to listings
        </a>

        <div class="lg:grid lg:grid-cols-[1.3fr_0.7fr] lg:gap-8">
            <article class="rounded-3xl border border-slate-200 bg-white shadow-sm">
                <header class="rounded-t-3xl border-b border-slate-100 bg-slate-50 px-5 py-6 sm:px-6">
                    <p class="text-xs font-semibold uppercase tracking-wider text-brand-700">Role details</p>
                    <h1 class="mt-3 text-3xl font-bold tracking-tight text-slate-900"><?= htmlspecialchars($listing->title) ?></h1>
                    <?php if (!empty($listing->company)): ?>
                        <p class="mt-2 text-sm text-slate-500 flex flex-wrap items-center gap-3">
                            <span class="inline-flex items-center gap-2">
                                <i class="fa fa-building text-slate-400" aria-hidden="true"></i>
                                <?= htmlspecialchars($listing->company) ?>
                            </span>
                        </p>
                    <?php endif; ?>

                    <div class="mt-5 flex flex-wrap gap-3">
                        <span class="inline-flex items-center gap-2 rounded-2xl bg-white px-4 py-2 text-sm font-medium text-slate-700 ring-1 ring-slate-200">
                            <i class="fa fa-location-dot text-slate-400" aria-hidden="true"></i>
                            <?= htmlspecialchars($listing->city ?: $listing->state ?: $listing->address ?: 'Remote') ?>
                        </span>
                        <span class="inline-flex items-center gap-2 rounded-2xl bg-brand-50 px-4 py-2 text-sm font-medium text-brand-700 ring-1 ring-brand-100">
                            <i class="fa fa-dollar-sign text-brand-600" aria-hidden="true"></i>
                            $<?= htmlspecialchars(number_format((float)$listing->salary, 0)) ?>
                        </span>
                        <span class="inline-flex items-center gap-2 rounded-2xl bg-slate-100 px-4 py-2 text-sm font-medium text-slate-700 ring-1 ring-slate-200">
                            <i class="fa fa-envelope text-slate-500" aria-hidden="true"></i>
                            <?= htmlspecialchars($listing->email) ?>
                        </span>
                    </div>
                </header>

                <div class="space-y-8 px-5 py-6 sm:px-6">
                    <?php if (!empty($listing->description)): ?>
                        <section>
                            <div class="flex items-center justify-between gap-4">
                                <h2 class="text-sm font-semibold uppercase tracking-wide text-slate-900">Description</h2>
                            </div>
                            <div class="mt-3 space-y-4 text-sm leading-relaxed text-slate-700">
                                <?= nl2br(htmlspecialchars($listing->description)) ?>
                            </div>
                        </section>
                    <?php endif; ?>

                    <?php if (!empty($listing->requirements)): ?>
                        <section>
                            <h2 class="text-sm font-semibold uppercase tracking-wide text-slate-900">Requirements</h2>
                            <div class="mt-3 space-y-4 text-sm leading-relaxed text-slate-700">
                                <?= nl2br(htmlspecialchars($listing->requirements)) ?>
                            </div>
                        </section>
                    <?php endif; ?>

                    <?php if (!empty($listing->benefits)): ?>
                        <section>
                            <h2 class="text-sm font-semibold uppercase tracking-wide text-slate-900">Benefits</h2>
                            <div class="mt-3 space-y-4 text-sm leading-relaxed text-slate-700">
                                <?= nl2br(htmlspecialchars($listing->benefits)) ?>
                            </div>
                        </section>
                    <?php endif; ?>
                </div>
            </article>

            <aside class="mt-6 lg:mt-0">
                <div class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm lg:sticky lg:top-20">
                    <div class="flex items-center justify-between gap-4">
                        <div>
                            <p class="text-sm font-semibold text-slate-900">Apply for this role</p>
                            <p class="mt-1 text-sm text-slate-500">Contact the employer directly to apply.</p>
                        </div>
                        <span class="rounded-full bg-brand-100 px-3 py-1 text-xs font-semibold uppercase tracking-wide text-brand-700">Live</span>
                    </div>

                    <dl class="mt-6 space-y-4 text-sm">
                        <div>
                            <dt class="text-xs font-medium uppercase tracking-wider text-slate-400">Email</dt>
                            <dd class="mt-1 font-semibold text-brand-700 break-all">
                                <a href="mailto:<?= htmlspecialchars($listing->email) ?>" class="hover:underline"><?= htmlspecialchars($listing->email) ?></a>
                            </dd>
                        </div>
                        <?php if (!empty($listing->phone)): ?>
                            <div>
                                <dt class="text-xs font-medium uppercase tracking-wider text-slate-400">Phone</dt>
                                <dd class="mt-1 font-semibold text-slate-900"><?= htmlspecialchars($listing->phone) ?></dd>
                            </div>
                        <?php endif; ?>
                    </dl>

                    <a href="mailto:<?= htmlspecialchars($listing->email) ?>" class="mt-6 inline-flex w-full items-center justify-center gap-2 rounded-2xl bg-brand-700 px-4 py-3 text-sm font-semibold text-white shadow-lg shadow-brand-700/10 transition hover:bg-brand-800">
                        <i class="fa fa-envelope text-xs" aria-hidden="true"></i> Email employer
                    </a>
                </div>
            </aside>
        </div>
    </div>
</main>

<?= loadPartial("footer"); ?>
