<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GiveLink Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-50 font-sans">
    <!-- Main Container -->
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <div class="w-64 bg-emerald-700 text-white">
            <div class="p-6">
                <div class="flex items-center space-x-2 mb-8">
                    <i class="fas fa-hand-holding-heart text-2xl"></i>
                    <span class="text-2xl font-bold">GiveLink</span>
                </div>
                <div class="space-y-1">
                    <a href="dashboard.php" class="flex items-center space-x-3 px-4 py-3 rounded-lg bg-emerald-800">
                        <i class="fas fa-chart-pie"></i>
                        <span>Dashboard</span>
                    </a>
                    <a href="campaigns/campaign.php" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 transition-colors">
                        <i class="fas fa-bullhorn"></i>
                        <span>Campaigns</span>
                    </a>
                    <a href="events/event.php" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 transition-colors">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Events</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 transition-colors">
                        <i class="fas fa-heart"></i>
                        <span>Donors</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 transition-colors">
                        <i class="fas fa-users"></i>
                        <span>Volunteers</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 transition-colors">
                        <i class="fas fa-file-alt"></i>
                        <span>Reports</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 transition-colors">
                        <i class="fas fa-cog"></i>
                        <span>Settings</span>
                    </a>
                </div>
            </div>
            <div class="p-6 mt-auto">
                <div class="flex items-center space-x-3 px-4 py-3 rounded-lg bg-emerald-600">
                    <div class="h-8 w-8 rounded-full bg-white text-emerald-700 flex items-center justify-center">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium">Sarah Johnson</p>
                        <p class="text-xs text-emerald-200">Admin</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 overflow-auto">
            <!-- Header -->
            <div class="bg-white border-b p-4 flex justify-between items-center sticky top-0 z-10">
                <div>
                    <h1 class="text-xl font-semibold text-gray-800">Dashboard Overview</h1>
                    <p class="text-sm text-gray-500">Welcome back, Sarah</p>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="p-2 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200">
                        <i class="fas fa-bell"></i>
                    </button>
                    <button class="p-2 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200">
                        <i class="fas fa-envelope"></i>
                    </button>
                    <button class="bg-emerald-100 text-emerald-700 px-4 py-2 rounded-md hover:bg-emerald-200 transition-colors">
                        <i class="fas fa-sign-out-alt mr-2"></i>Logout
                    </button>
                </div>
            </div>

            <div class="p-6">
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <div class="flex justify-between items-center mb-4">
                            <div>
                                <p class="text-sm font-medium text-gray-500">Total Donations</p>
                                <h3 class="text-2xl font-bold text-emerald-700">$45,000</h3>
                            </div>
                            <div class="p-3 rounded-full bg-emerald-100 text-emerald-700">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                        </div>
                        <p class="text-xs text-gray-500">
                            <span class="text-emerald-500"><i class="fas fa-arrow-up mr-1"></i>12%</span> from last month
                        </p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <div class="flex justify-between items-center mb-4">
                            <div>
                                <p class="text-sm font-medium text-gray-500">Active Campaigns</p>
                                <h3 class="text-2xl font-bold text-indigo-700">10</h3>
                            </div>
                            <div class="p-3 rounded-full bg-indigo-100 text-indigo-700">
                                <i class="fas fa-bullhorn"></i>
                            </div>
                        </div>
                        <p class="text-xs text-gray-500">
                            <span class="text-indigo-500"><i class="fas fa-arrow-up mr-1"></i>2</span> new this week
                        </p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <div class="flex justify-between items-center mb-4">
                            <div>
                                <p class="text-sm font-medium text-gray-500">Upcoming Events</p>
                                <h3 class="text-2xl font-bold text-amber-600">5</h3>
                            </div>
                            <div class="p-3 rounded-full bg-amber-100 text-amber-600">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                        </div>
                        <p class="text-xs text-gray-500">Next event in <span class="text-amber-600">3 days</span></p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <div class="flex justify-between items-center mb-4">
                            <div>
                                <p class="text-sm font-medium text-gray-500">Volunteers</p>
                                <h3 class="text-2xl font-bold text-purple-700">128</h3>
                            </div>
                            <div class="p-3 rounded-full bg-purple-100 text-purple-700">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                        <p class="text-xs text-gray-500">
                            <span class="text-purple-500"><i class="fas fa-arrow-up mr-1"></i>5%</span> from last month
                        </p>
                    </div>
                </div>

                <!-- Campaign Progress Section -->
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Campaign Progress</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="h-12 w-12 rounded-lg bg-emerald-100 flex items-center justify-center">
                                <i class="fas fa-tree text-emerald-700"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">Save the Forests</h3>
                                <p class="text-sm text-gray-500">Environmental Campaign</p>
                            </div>
                            <div class="ml-auto">
                                <span class="text-sm font-medium text-emerald-700">60%</span>
                            </div>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2 mb-2">
                            <div class="bg-emerald-500 h-2 rounded-full" style="width: 60%"></div>
                        </div>
                        <div class="flex justify-between text-sm text-gray-600 mb-4">
                            <p>Goal: $10,000</p>
                            <p>Raised: $6,000</p>
                        </div>
                        <div class="flex space-x-2">
                            <button class="px-4 py-2 bg-emerald-100 text-emerald-700 rounded-md text-sm hover:bg-emerald-200 transition-colors">View Details</button>
                            <button class="px-4 py-2 bg-emerald-600 text-white rounded-md text-sm hover:bg-emerald-700 transition-colors">Donate Now</button>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="h-12 w-12 rounded-lg bg-amber-100 flex items-center justify-center">
                                <i class="fas fa-utensils text-amber-700"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">Feed the Homeless</h3>
                                <p class="text-sm text-gray-500">Community Support</p>
                            </div>
                            <div class="ml-auto">
                                <span class="text-sm font-medium text-amber-700">40%</span>
                            </div>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2 mb-2">
                            <div class="bg-amber-500 h-2 rounded-full" style="width: 40%"></div>
                        </div>
                        <div class="flex justify-between text-sm text-gray-600 mb-4">
                            <p>Goal: $5,000</p>
                            <p>Raised: $2,000</p>
                        </div>
                        <div class="flex space-x-2">
                            <button class="px-4 py-2 bg-amber-100 text-amber-700 rounded-md text-sm hover:bg-amber-200 transition-colors">View Details</button>
                            <button class="px-4 py-2 bg-amber-600 text-white rounded-md text-sm hover:bg-amber-700 transition-colors">Donate Now</button>
                        </div>
                    </div>
                </div>

                <!-- Events and Volunteer Signups -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                    <div>
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Upcoming Events</h2>
                        <div class="bg-white rounded-xl shadow-sm border border-gray-100 divide-y">
                            <div class="p-6">
                                <div class="flex">
                                    <div class="mr-4 text-center">
                                        <div class="h-14 w-14 rounded-lg bg-indigo-100 text-indigo-700 flex flex-col items-center justify-center">
                                            <span class="text-sm font-bold">Apr</span>
                                            <span class="text-lg font-bold">10</span>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-medium text-gray-800">Beach Cleanup</h4>
                                        <p class="text-sm text-gray-500 mb-2">
                                            <i class="fas fa-map-marker-alt mr-1"></i> Miami Beach
                                        </p>
                                        <div class="flex items-center text-xs text-gray-500">
                                            <span class="mr-2"><i class="fas fa-user mr-1"></i> 24 volunteers</span>
                                            <span><i class="fas fa-clock mr-1"></i> 9:00 AM - 1:00 PM</span>
                                        </div>
                                    </div>
                                    <button class="px-4 py-2 bg-indigo-600 text-white rounded-md text-sm hover:bg-indigo-700 transition-colors">RSVP</button>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex">
                                    <div class="mr-4 text-center">
                                        <div class="h-14 w-14 rounded-lg bg-indigo-100 text-indigo-700 flex flex-col items-center justify-center">
                                            <span class="text-sm font-bold">Apr</span>
                                            <span class="text-lg font-bold">15</span>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-medium text-gray-800">Food Bank Distribution</h4>
                                        <p class="text-sm text-gray-500 mb-2">
                                            <i class="fas fa-map-marker-alt mr-1"></i> Central Park
                                        </p>
                                        <div class="flex items-center text-xs text-gray-500">
                                            <span class="mr-2"><i class="fas fa-user mr-1"></i> 42 volunteers</span>
                                            <span><i class="fas fa-clock mr-1"></i> 10:00 AM - 2:00 PM</span>
                                        </div>
                                    </div>
                                    <button class="px-4 py-2 bg-indigo-600 text-white rounded-md text-sm hover:bg-indigo-700 transition-colors">RSVP</button>
                                </div>
                            </div>
                            <div class="p-6">
                                <button class="w-full px-4 py-2 bg-gray-100 text-gray-700 rounded-md text-sm hover:bg-gray-200 transition-colors">
                                    View All Events
                                </button>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Recent Donations</h2>
                        <div class="bg-white rounded-xl shadow-sm border border-gray-100">
                            <div class="p-6 divide-y">
                                <div class="py-3">
                                    <div class="flex items-center">
                                        <div class="h-10 w-10 rounded-full bg-gray-100 flex items-center justify-center mr-3">
                                            <i class="fas fa-user text-gray-500"></i>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-medium text-gray-800">John Doe</h4>
                                            <p class="text-sm text-gray-500">Save the Forests</p>
                                        </div>
                                        <div class="text-right">
                                            <p class="font-medium text-emerald-700">$50</p>
                                            <p class="text-xs text-gray-500">2 hours ago</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-3">
                                    <div class="flex items-center">
                                        <div class="h-10 w-10 rounded-full bg-gray-100 flex items-center justify-center mr-3">
                                            <i class="fas fa-user text-gray-500"></i>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-medium text-gray-800">Jane Smith</h4>
                                            <p class="text-sm text-gray-500">Feed the Homeless</p>
                                        </div>
                                        <div class="text-right">
                                            <p class="font-medium text-emerald-700">$200</p>
                                            <p class="text-xs text-gray-500">5 hours ago</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-3">
                                    <div class="flex items-center">
                                        <div class="h-10 w-10 rounded-full bg-gray-100 flex items-center justify-center mr-3">
                                            <i class="fas fa-building text-gray-500"></i>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-medium text-gray-800">ABC Corporation</h4>
                                            <p class="text-sm text-gray-500">Save the Forests</p>
                                        </div>
                                        <div class="text-right">
                                            <p class="font-medium text-emerald-700">$1,000</p>
                                            <p class="text-xs text-gray-500">Yesterday</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-3">
                                    <button class="w-full px-4 py-2 bg-gray-100 text-gray-700 rounded-md text-sm hover:bg-gray-200 transition-colors">
                                        View All Donations
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Admin Actions -->
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Admin Actions</h2>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 mb-6">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <button class="flex items-center justify-center space-x-2 p-4 bg-emerald-100 text-emerald-700 rounded-lg hover:bg-emerald-200 transition-colors">
                            <i class="fas fa-check-circle"></i>
                            <span>Approve Campaigns (3)</span>
                        </button>
                        <button class="flex items-center justify-center space-x-2 p-4 bg-amber-100 text-amber-700 rounded-lg hover:bg-amber-200 transition-colors">
                            <i class="fas fa-calendar-check"></i>
                            <span>Approve Events (2)</span>
                        </button>
                        <button class="flex items-center justify-center space-x-2 p-4 bg-red-100 text-red-700 rounded-lg hover:bg-red-200 transition-colors">
                            <i class="fas fa-user-times"></i>
                            <span>Manage Users</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>