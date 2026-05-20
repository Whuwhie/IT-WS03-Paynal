<?= loadPartial("head"); ?>
<?= loadPartial("navbar"); ?>

<main class="flex-1 py-8">
    <div class="mx-auto max-w-7xl px-3">
        <a href="/listings" class="mb-6 inline-flex items-center gap-2 text-sm font-medium text-slate-600 hover:text-brand-700">
            <i class="fa fa-arrow-left text-xs" aria-hidden="true"></i> Back to listings
        </a>

        <div class="lg:grid lg:grid-cols-[1fr_17rem] lg:gap-8">
            <article class="rounded-xl border border-slate-200 bg-white">
                <header class="border-b border-slate-100 px-5 py-5 sm:px-6">
                    <p class="text-xs font-semibold uppercase tracking-wider text-brand-700">Role details</p>
                    <h1 class="mt-1 text-2xl font-bold tracking-tight text-slate-900"><?= htmlspecialchars($listing->title) ?></h1>
                    <?php if (!empty($listing->company)): ?>
                        <p class="mt-1 text-sm text-slate-500">
                            <i class="fa fa-building mr-1 text-slate-400" aria-hidden="true"></i><?= htmlspecialchars($listing->company) ?>
                        </p>
                    <?php endif; ?>
                </header>

                <div class="grid gap-px bg-slate-100 sm:grid-cols-3">
                    <div class="bg-white px-5 py-4 sm:px-6">
                        <p class="text-xs font-medium uppercase tracking-wider text-slate-400">Location</p>
                        <p class="mt-1 text-sm font-semibold text-slate-900"><?= htmlspecialchars($listing->city ?: $listing->state ?: $listing->address) ?></p>
                    </div>
                    <div class="bg-white px-5 py-4 sm:px-6">
                        <p class="text-xs font-medium uppercase tracking-wider text-slate-400">Salary</p>
                        <p class="mt-1 text-sm font-semibold text-slate-900">$<?= htmlspecialchars(number_format((float)$listing->salary, 0)) ?></p>
                    </div>
                    <div class="bg-white px-5 py-4 sm:px-6">
                        <p class="text-xs font-medium uppercase tracking-wider text-slate-400">Contact</p>
                        <p class="mt-1 truncate text-sm font-semibold text-slate-900"><?= htmlspecialchars($listing->email) ?></p>
                    </div>
                </div>

                <div class="space-y-6 px-5 py-6 sm:px-6">
                    <?php if (!empty($listing->description)): ?>
                        <section>
                            <h2 class="text-xs font-semibold uppercase tracking-wider text-slate-500">Description</h2>
                            <div class="mt-2 text-sm leading-relaxed text-slate-700"><?= nl2br(htmlspecialchars($listing->description)) ?></div>
                        </section>
                    <?php endif; ?>

                    <?php if (!empty($listing->requirements)): ?>
                        <section>
                            <h2 class="text-xs font-semibold uppercase tracking-wider text-slate-500">Requirements</h2>
                            <div class="mt-2 text-sm leading-relaxed text-slate-700"><?= nl2br(htmlspecialchars($listing->requirements)) ?></div>
                        </section>
                    <?php endif; ?>

                    <?php if (!empty($listing->benefits)): ?>
                        <section>
                            <h2 class="text-xs font-semibold uppercase tracking-wider text-slate-500">Benefits</h2>
                            <div class="mt-2 text-sm leading-relaxed text-slate-700"><?= nl2br(htmlspecialchars($listing->benefits)) ?></div>
                        </section>
                    <?php endif; ?>
                </div>
            </article>

            <aside class="mt-6 lg:mt-0">
                <div class="rounded-xl border border-slate-200 bg-white p-5 lg:sticky lg:top-20">
                    <h2 class="text-sm font-semibold text-slate-900">Apply for this role</h2>
                    <p class="mt-2 text-sm text-slate-500">Reach out directly using the contact below.</p>
                    <dl class="mt-4 space-y-3 text-sm">
                        <div>
                            <dt class="text-xs font-medium uppercase tracking-wider text-slate-400">Email</dt>
                            <dd class="mt-0.5 font-medium text-brand-700">
                                <a href="mailto:<?= htmlspecialchars($listing->email) ?>" class="hover:underline"><?= htmlspecialchars($listing->email) ?></a>
                            </dd>
                        </div>
                        <?php if (!empty($listing->phone)): ?>
                            <div>
                                <dt class="text-xs font-medium uppercase tracking-wider text-slate-400">Phone</dt>
                                <dd class="mt-0.5 font-medium text-slate-900"><?= htmlspecialchars($listing->phone) ?></dd>
                            </div>
                        <?php endif; ?>
                    </dl>
                    <a href="mailto:<?= htmlspecialchars($listing->email) ?>" class="mt-5 flex w-full items-center justify-center gap-2 rounded-md bg-brand-700 px-4 py-2.5 text-sm font-medium text-white hover:bg-brand-800">
                        <i class="fa fa-envelope text-xs" aria-hidden="true"></i> Email employer
                    </a>
                </div>
            </aside>
        </div>
    </div>
</main>

<?= loadPartial("footer"); ?>
