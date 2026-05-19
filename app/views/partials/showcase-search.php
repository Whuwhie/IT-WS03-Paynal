<section class="relative overflow-hidden border-b border-slate-800 showcase-bg bg-cover bg-center bg-no-repeat">
    <div class="absolute inset-0 bg-slate-900/75" style="background-color: var(--showcase-overlay, rgba(15, 23, 42, 0.75));"></div>

    <div class="relative mx-auto grid max-w-6xl gap-8 px-4 py-10 lg:grid-cols-2 lg:items-center lg:py-14">
        <div class="text-white">
            <p class="text-xs font-semibold uppercase tracking-widest text-teal-300">For skilled professionals</p>
            <h1 class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">
                Connect your skills with the right&nbsp;role
            </h1>
            <p class="mt-3 max-w-md text-sm leading-relaxed text-slate-300">
                Search by ability, location, and experience. SkillSync surfaces verified listings with salary, place, and apply info — no guesswork.
            </p>
            <ul class="mt-6 hidden space-y-2 text-sm text-slate-300 sm:block">
                <li class="flex items-center gap-2"><i class="fa fa-check text-teal-400" aria-hidden="true"></i> Skill-aligned job matches</li>
                <li class="flex items-center gap-2"><i class="fa fa-check text-teal-400" aria-hidden="true"></i> Clear role summaries</li>
                <li class="flex items-center gap-2"><i class="fa fa-check text-teal-400" aria-hidden="true"></i> Employer-backed openings</li>
            </ul>
        </div>

        <div class="rounded-3xl border border-white/10 bg-white/95 p-6 shadow-2xl shadow-slate-900/10 transition duration-300 sm:p-8">
            <div class="grid gap-3 sm:grid-cols-[minmax(0,1fr)_220px] sm:items-start sm:gap-4">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-wider text-slate-500">Search openings</p>
                    <h2 class="mt-2 text-xl font-semibold text-slate-900">Find your next role</h2>
                </div>
            </div>

            <form method="GET" action="/listings" class="mt-6 grid gap-4">
                <div class="grid gap-4 sm:grid-cols-2">
                    <div>
                        <label for="hero-keywords" class="mb-2 block text-sm font-medium text-slate-700">Keywords</label>
                        <input
                            id="hero-keywords"
                            type="text"
                            name="keywords"
                            placeholder="e.g. PHP developer"
                            value="<?= htmlspecialchars($_GET['keywords'] ?? '') ?>"
                            class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-sm text-slate-900 placeholder:text-slate-400 focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20"
                        />
                    </div>
                    <div>
                        <label for="hero-location" class="mb-2 block text-sm font-medium text-slate-700">Location</label>
                        <input
                            id="hero-location"
                            type="text"
                            name="location"
                            placeholder="City or state"
                            value="<?= htmlspecialchars($_GET['location'] ?? '') ?>"
                            class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-sm text-slate-900 placeholder:text-slate-400 focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20"
                        />
                    </div>
                </div>

                <button type="submit" class="flex w-full items-center justify-center gap-2 rounded-2xl bg-brand-700 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-brand-700/20 transition duration-200 hover:bg-brand-800 focus:outline-none focus:ring-2 focus:ring-brand-600/50">
                    <i class="fa fa-search" aria-hidden="true"></i> Search jobs
                </button>
            </form>
        </div>
    </div>
</section>
