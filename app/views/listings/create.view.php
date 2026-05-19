<?= loadPartial("head"); ?>
<?= loadPartial("navbar"); ?>

<main class="flex flex-1 items-start justify-center px-4 py-10">
    <div class="w-full max-w-2xl rounded-xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">
        <header class="border-b border-slate-100 pb-5 text-center sm:text-left">
            <p class="text-xs font-semibold uppercase tracking-wider text-brand-700">Employers</p>
            <h1 class="mt-1 text-xl font-bold text-slate-900">Post a job listing</h1>
            <p class="mt-1 text-sm text-slate-500">Share role details so candidates can find you</p>
        </header>

        <form method="POST" class="mt-6 space-y-6">
            <fieldset class="space-y-4">
                <legend class="text-xs font-semibold uppercase tracking-wider text-slate-500">Job information</legend>

                <div>
                    <label for="title" class="mb-1 block text-xs font-medium text-slate-600">Job title</label>
                    <input type="text" id="title" name="title" placeholder="e.g. Senior PHP Developer"
                        class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20" />
                </div>
                <div>
                    <label for="description" class="mb-1 block text-xs font-medium text-slate-600">Description</label>
                    <textarea id="description" name="description" placeholder="Role summary and responsibilities" rows="4"
                        class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20"></textarea>
                </div>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <div>
                        <label for="salary" class="mb-1 block text-xs font-medium text-slate-600">Annual salary</label>
                        <input type="text" id="salary" name="salary" placeholder="75000"
                            class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20" />
                    </div>
                    <div>
                        <label for="requirements" class="mb-1 block text-xs font-medium text-slate-600">Requirements</label>
                        <input type="text" id="requirements" name="requirements" placeholder="Key skills or experience"
                            class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20" />
                    </div>
                </div>
                <div>
                    <label for="benefits" class="mb-1 block text-xs font-medium text-slate-600">Benefits</label>
                    <input type="text" id="benefits" name="benefits" placeholder="Health, remote, PTO, etc."
                        class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20" />
                </div>
            </fieldset>

            <fieldset class="space-y-4">
                <legend class="text-xs font-semibold uppercase tracking-wider text-slate-500">Company &amp; location</legend>

                <div>
                    <label for="company" class="mb-1 block text-xs font-medium text-slate-600">Company name</label>
                    <input type="text" id="company" name="company"
                        class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20" />
                </div>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <div>
                        <label for="city" class="mb-1 block text-xs font-medium text-slate-600">City</label>
                        <input type="text" id="city" name="city"
                            class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20" />
                    </div>
                    <div>
                        <label for="state" class="mb-1 block text-xs font-medium text-slate-600">State</label>
                        <input type="text" id="state" name="state"
                            class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20" />
                    </div>
                </div>
                <div>
                    <label for="address" class="mb-1 block text-xs font-medium text-slate-600">Address</label>
                    <input type="text" id="address" name="address"
                        class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20" />
                </div>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <div>
                        <label for="phone" class="mb-1 block text-xs font-medium text-slate-600">Phone</label>
                        <input type="text" id="phone" name="phone"
                            class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20" />
                    </div>
                    <div>
                        <label for="email" class="mb-1 block text-xs font-medium text-slate-600">Application email</label>
                        <input type="email" id="email" name="email"
                            class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20" />
                    </div>
                </div>
            </fieldset>

            <div class="flex flex-col gap-2 border-t border-slate-100 pt-4 sm:flex-row">
                <button type="submit" class="flex-1 rounded-md bg-brand-700 px-4 py-2.5 text-sm font-medium text-white hover:bg-brand-800">
                    Save listing
                </button>
                <a href="/" class="flex-1 rounded-md border border-slate-200 px-4 py-2.5 text-center text-sm font-medium text-slate-700 hover:bg-slate-50">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</main>

<?= loadPartial("footer"); ?>
