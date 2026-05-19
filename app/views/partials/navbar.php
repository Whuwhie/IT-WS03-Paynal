<header class="sticky top-0 z-50 border-b border-slate-200 bg-white/95 backdrop-blur-sm">
    <div class="mx-auto flex max-w-6xl items-center justify-between gap-4 px-4 py-3">
        <a href="/" class="group flex min-w-0 flex-col">
            <span class="text-lg font-bold tracking-tight text-slate-900 group-hover:text-brand-700">SkillSync</span>
            <span class="hidden text-xs text-slate-500 sm:block">Open roles · Job listings</span>
        </a>

        <details class="relative lg:hidden">
            <summary class="flex h-9 w-9 cursor-pointer list-none items-center justify-center rounded-md border border-slate-200 text-slate-600 hover:bg-slate-50 [&::-webkit-details-marker]:hidden">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </summary>
            <div class="absolute right-0 mt-2 w-52 rounded-lg border border-slate-200 bg-white p-2 shadow-lg">
                <a href="/listings/create" class="mb-2 flex w-full items-center justify-center gap-2 rounded-md bg-brand-700 px-3 py-2 text-sm font-medium text-white hover:bg-brand-800">
                    <i class="fa fa-plus text-xs" aria-hidden="true"></i> Post a Job
                </a>
                <?php if (!isset($_SESSION['user_id'])): ?>
                    <a href="/auth/login" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-slate-50">Login</a>
                    <a href="/auth/register" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-slate-50">Register</a>
                <?php else: ?>
                    <a href="/auth/login" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-slate-50">Logout</a>
                <?php endif; ?>
            </div>
        </details>

        <nav class="hidden items-center gap-1 lg:flex" aria-label="Main">
            <a href="/listings" class="rounded-md px-3 py-2 text-sm font-medium text-slate-600 hover:bg-slate-100 hover:text-slate-900">Browse jobs</a>
            <?php if (!isset($_SESSION['user_id'])): ?>
                <a href="/auth/login" class="rounded-md px-3 py-2 text-sm font-medium text-slate-600 hover:bg-slate-100">Login</a>
                <a href="/auth/register" class="rounded-md px-3 py-2 text-sm font-medium text-slate-600 hover:bg-slate-100">Register</a>
            <?php else: ?>
                <a href="/auth/login" class="rounded-md px-3 py-2 text-sm font-medium text-slate-600 hover:bg-slate-100">Logout</a>
            <?php endif; ?>
            <a href="/listings/create" class="ml-2 inline-flex items-center gap-2 rounded-md bg-brand-700 px-4 py-2 text-sm font-medium text-white hover:bg-brand-800">
                <i class="fa fa-plus text-xs" aria-hidden="true"></i> Post a Job
            </a>
        </nav>
    </div>
</header>
