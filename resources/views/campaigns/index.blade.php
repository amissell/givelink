<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GiveLink Campaigns</title>
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
                    <a href="../dashboard.php" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 transition-colors">
                        <i class="fas fa-chart-pie"></i>
                        <span>Dashboard</span>
                    </a>
                    <a href="campaign.php" class="flex items-center space-x-3 px-4 py-3 rounded-lg bg-emerald-800">
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
                    <h1 class="text-xl font-semibold text-gray-800">Campaigns</h1>
                    <p class="text-sm text-gray-500">Manage and oversee campaigns</p>
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
                <!-- Campaign List -->
                <div class="mb-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Active Campaigns</h2>
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-4">
                                <div class="h-12 w-12 rounded-lg bg-emerald-100 flex items-center justify-center">
                                    <i class="fas fa-tree text-emerald-700"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold">Save the Forests</h3>
                                    <p class="text-sm text-gray-500">Environmental Campaign</p>
                                </div>
                            </div>
                            <div class="flex space-x-2">
                                <button class="px-4 py-2 bg-emerald-100 text-emerald-700 rounded-md text-sm hover:bg-emerald-200 transition-colors">Edit</button>
                                <button class="px-4 py-2 bg-red-100 text-red-700 rounded-md text-sm hover:bg-red-200 transition-colors">Delete</button>
                                <button class="px-4 py-2 bg-blue-100 text-blue-700 rounded-md text-sm hover:bg-blue-200 transition-colors">Approve</button>
                            </div>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2 mb-2">
                            <div class="bg-emerald-500 h-2 rounded-full" style="width: 60%"></div>
                        </div>
                        <div class="flex justify-between text-sm text-gray-600 mb-4">
                            <p>Goal: $10,000</p>
                            <p>Raised: $6,000</p>
                        </div>
                    </div>
                </div>

                <div class="mb-6">
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-4">
                                <div class="h-12 w-12 rounded-lg bg-amber-100 flex items-center justify-center">
                                    <i class="fas fa-utensils text-amber-700"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold">Feed the Homeless</h3>
                                    <p class="text-sm text-gray-500">Community Support</p>
                                </div>
                            </div>
                            <div class="flex space-x-2">
                                <button class="px-4 py-2 bg-amber-100 text-amber-700 rounded-md text-sm hover:bg-amber-200 transition-colors">Edit</button>
                                <button class="px-4 py-2 bg-red-100 text-red-700 rounded-md text-sm hover:bg-red-200 transition-colors">Delete</button>
                                <button class="px-4 py-2 bg-blue-100 text-blue-700 rounded-md text-sm hover:bg-blue-200 transition-colors">Approve</button>
                            </div>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2 mb-2">
                            <div class="bg-amber-500 h-2 rounded-full" style="width: 40%"></div>
                        </div>
                        <div class="flex justify-between text-sm text-gray-600 mb-4">
                            <p>Goal: $5,000</p>
                            <p>Raised: $2,000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
