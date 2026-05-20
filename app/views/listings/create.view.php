<?= loadPartial("head"); ?>
<?= loadPartial("navbar"); ?>

<main class="flex flex-1 justify-center px-3 py-10">
    <div class="w-full max-w-4xl">
        <div class="mx-auto rounded-3xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">
            <header class="border-b border-slate-100 pb-5 text-center sm:text-left">
                <p class="text-xs font-semibold uppercase tracking-wider text-brand-700">Employers</p>
                <h1 class="mt-2 text-3xl font-bold tracking-tight text-slate-900">Post a job listing</h1>
                <p class="mt-3 text-sm leading-6 text-slate-500">Capture attention with a clear role description, salary expectations, and how to apply.</p>
            </header>

            <form method="POST" class="mt-8 space-y-6">
                <fieldset class="rounded-3xl border border-slate-200 bg-slate-50 p-6 shadow-sm">
                    <legend class="text-sm font-semibold text-slate-900">Job information</legend>

                    <div class="mt-5 space-y-5">
                        <div>
                            <label for="title" class="mb-2 block text-sm font-medium text-slate-700">Job title</label>
                            <input type="text" id="title" name="title" placeholder="Senior PHP Developer"
                                class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-slate-900 focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20" />
                        </div>

                        <div>
                            <label for="description" class="mb-2 block text-sm font-medium text-slate-700">Description</label>
                            <textarea id="description" name="description" placeholder="Summarize the role, responsibilities, and what makes the opportunity unique." rows="5"
                                class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-slate-900 focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20"></textarea>
                        </div>

                        <div class="grid gap-4 sm:grid-cols-2">
                            <div>
                                <label for="salary" class="mb-2 block text-sm font-medium text-slate-700">Annual salary</label>
                                <input type="text" id="salary" name="salary" placeholder="75,000"
                                    class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-slate-900 focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20" />
                                <p class="mt-2 text-xs text-slate-500">Use a round number or range for clarity.</p>
                            </div>
                            <div>
                                <label for="requirements" class="mb-2 block text-sm font-medium text-slate-700">Requirements</label>
                                <input type="text" id="requirements" name="requirements" placeholder="PHP, Laravel, SQL"
                                    class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-slate-900 focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20" />
                                <p class="mt-2 text-xs text-slate-500">Separate multiple skills with commas.</p>
                            </div>
                        </div>

                        <div>
                            <label for="benefits" class="mb-2 block text-sm font-medium text-slate-700">Benefits</label>
                            <input type="text" id="benefits" name="benefits" placeholder="Healthcare, remote work, PTO"
                                class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-slate-900 focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20" />
                            <p class="mt-2 text-xs text-slate-500">Optional, but helps your listing stand out.</p>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="rounded-3xl border border-slate-200 bg-slate-50 p-6 shadow-sm">
                    <legend class="text-sm font-semibold text-slate-900">Company & location</legend>

                    <div class="mt-5 space-y-5">
                        <div>
                            <label for="company" class="mb-2 block text-sm font-medium text-slate-700">Company name</label>
                            <input type="text" id="company" name="company" placeholder="Your company"
                                class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-slate-900 focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20" />
                        </div>

                        <div class="grid gap-4 sm:grid-cols-2">
                            <div>
                                <label for="city" class="mb-2 block text-sm font-medium text-slate-700">City</label>
                                <input type="text" id="city" name="city" placeholder="City"
                                    class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-slate-900 focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20" />
                            </div>
                            <div>
                                <label for="state" class="mb-2 block text-sm font-medium text-slate-700">State</label>
                                <input type="text" id="state" name="state" placeholder="State"
                                    class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-slate-900 focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20" />
                            </div>
                        </div>

                        <div>
                            <label for="address" class="mb-2 block text-sm font-medium text-slate-700">Address</label>
                            <input type="text" id="address" name="address" placeholder="Street address or office location"
                                class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-slate-900 focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20" />
                        </div>

                        <div class="grid gap-4 sm:grid-cols-2">
                            <div>
                                <label for="phone" class="mb-2 block text-sm font-medium text-slate-700">Phone</label>
                                <input type="text" id="phone" name="phone" placeholder="(123) 456-7890"
                                    class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-slate-900 focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20" />
                            </div>
                            <div>
                                <label for="email" class="mb-2 block text-sm font-medium text-slate-700">Application email</label>
                                <input type="email" id="email" name="email" placeholder="jobs@company.com"
                                    class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-slate-900 focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20" />
                            </div>
                        </div>
                    </div>
                </fieldset>

                <div class="mt-6 flex flex-col gap-3 border-t border-slate-100 pt-6 sm:flex-row sm:justify-end">
                    <a href="/" class="rounded-2xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 hover:bg-slate-50 text-center">Cancel</a>
                    <button type="submit" class="rounded-2xl bg-brand-700 px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-brand-700/10 transition hover:bg-brand-800">Save listing</button>
                </div>
            </form>
        </div>

    </div>
</main>

<?= loadPartial("footer"); ?>
