<header class="sticky top-0 z-50 border-b border-slate-200 bg-white/95 backdrop-blur-sm">
    <div class="mx-auto flex max-w-7xl items-center justify-between gap-4 px-3 py-4">
        <a href="/" class="group flex min-w-0 flex-col">
            <span class="text-2xl font-bold tracking-tight text-slate-900 group-hover:text-brand-700 sm:text-3xl">SkillSync</span>
        </a>

        <details class="relative lg:hidden">
            <summary class="flex h-10 w-10 cursor-pointer list-none items-center justify-center rounded-md border border-slate-200 text-slate-600 hover:bg-slate-50 [&::-webkit-details-marker]:hidden">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </summary>
            <div class="absolute right-0 mt-2 w-56 rounded-lg border border-slate-200 bg-white p-3 shadow-lg">
                <a href="/listings/create" class="mb-3 flex w-full items-center justify-center gap-2 rounded-md bg-brand-700 px-3 py-3 text-base font-medium text-white hover:bg-brand-800">
                    <i class="fa fa-plus text-xs" aria-hidden="true"></i> Post a Job
                </a>
                <?php if (!isset($_SESSION['user_id'])): ?>
                    <a href="/auth/login" class="mb-2 block rounded-md px-3 py-3 text-base font-medium text-slate-700 hover:bg-slate-50">Login</a>
                    <a href="/auth/register" class="block rounded-md px-3 py-3 text-base font-medium text-slate-700 hover:bg-slate-50">Register</a>
                <?php else: ?>
                    <a href="/auth/login" class="block rounded-md px-3 py-3 text-base font-medium text-slate-700 hover:bg-slate-50">Logout</a>
                <?php endif; ?>
            </div>
        </details>

        <nav class="hidden items-center gap-3 lg:flex" aria-label="Main">
            <?php if (!isset($_SESSION['user_id'])): ?>
                <a href="/auth/login" class="rounded-md px-4 py-3 text-base font-medium text-slate-600 hover:bg-slate-100">Login</a>
                <a href="/auth/register" class="rounded-md px-4 py-3 text-base font-medium text-slate-600 hover:bg-slate-100">Register</a>
            <?php else: ?>
                <a href="/listings/create" class="inline-flex items-center gap-2 rounded-md bg-brand-700 px-5 py-3 text-base font-medium text-white hover:bg-brand-800">
                    <i class="fa fa-plus text-xs" aria-hidden="true"></i> Post a Job
                </a>
                <a href="/auth/login" class="rounded-md px-4 py-3 text-base font-medium text-slate-600 hover:bg-slate-100">Logout</a>
            <?php endif; ?>
        </nav>
    </div>
</header>
