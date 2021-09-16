<?php
    require 'header.php';
    include_once './includes/users.inc.php';
?>

    <main class="w-4/5 mx-auto p-8 bg-white my-12">
        <h1 class="text-2xl">Users Data</h1>
        <hr>
        <br>
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Registration Date
                    </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <?php
                        foreach ($data as $item) {
                            echo '<tr><td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">'
                                .$item["name"].
                            '</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">'
                                .$item["email"].
                            '</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">'
                                .$item["reg_date"].
                            '</td></tr>';
                        }        
                    ?>
                    <!-- More people... -->
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>

    </main>    

<?php
    require 'footer.php'
?>