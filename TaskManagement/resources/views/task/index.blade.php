<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Simplified Version of Task Management</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">
    </head>

    <body>
        <header>
            <nav>
                <div class="left-side">
                    <svg fill="#d70f2d" width="36" height="36" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                        <path d="M62.2148 15.1239C62.2148 15.1239 62.1776 15.0495 62.1528 14.9875C62.128 14.9255 62.1032 14.8635 62.0908 14.8263C62.0536 14.7643 62.0164 14.7272 61.9668 14.6652C61.942 14.6156 61.9048 14.5784 61.8552 14.5288C61.8304 14.504 61.7932 14.4792 61.7189 14.4172C61.6817 14.38 61.6445 14.3552 61.5825 14.318L50.0652 7.68536C49.6685 7.46221 49.1354 7.46221 48.7387 7.68536L37.209 14.3304C37.209 14.3304 37.1346 14.38 37.0602 14.442L36.9486 14.5288C36.9486 14.5288 36.8742 14.628 36.8122 14.7024L36.7379 14.8139C36.7379 14.8139 36.6759 14.9255 36.6387 15.0247L36.6015 15.1239C36.5767 15.2479 36.5519 15.3594 36.5519 15.471V27.8561L27.7001 32.9515V8.94991C27.7001 8.83833 27.7001 8.71436 27.6629 8.61518C27.6505 8.57798 27.6381 8.54079 27.6009 8.46641C27.5761 8.40442 27.5513 8.34243 27.5265 8.30524C27.5017 8.24325 27.4645 8.20606 27.4149 8.14407C27.3901 8.10688 27.3529 8.05729 27.3033 8.0077C27.2785 7.9829 27.2414 7.95811 27.167 7.89612C27.1298 7.87133 27.0926 7.83413 27.043 7.80934L15.5133 1.17666C15.1166 0.941113 14.5959 0.941113 14.1868 1.17666L2.66947 7.79694C2.66947 7.79694 2.57029 7.87133 2.5083 7.93331L2.38432 8.0201C2.38432 8.0201 2.32234 8.10688 2.26035 8.18126L2.18596 8.29284C2.18596 8.29284 2.12398 8.42921 2.09918 8.5036L2.04959 8.61518C2.0248 8.72675 2 8.83833 2 8.96231V48.4112C2 48.6344 2.06199 48.8699 2.18596 49.0683C2.29754 49.279 2.47111 49.4402 2.66947 49.5642L25.7165 62.8295C25.7165 62.8295 25.828 62.8791 25.9148 62.9163L26.0264 62.9535C26.138 62.9783 26.2495 63.0031 26.3735 63.0031C26.4851 63.0031 26.5967 62.9783 26.7083 62.9535L26.8198 62.9163C26.8942 62.8915 26.9686 62.8667 27.0306 62.8171L50.0776 49.5642C50.4867 49.3162 50.7347 48.8823 50.7347 48.4112V36.0261L61.5825 29.7777C61.7932 29.6662 61.9544 29.4926 62.0784 29.2942C62.19 29.0835 62.2519 28.8603 62.2519 28.6248V15.471C62.2519 15.3594 62.2519 15.2479 62.2148 15.1239ZM49.4081 20.5664L40.5563 15.471L49.4081 10.388L58.2599 15.471L49.4081 20.5664ZM14.8562 3.86693L23.6957 8.96231L14.8562 14.0577L6.0044 8.96231L14.8562 3.86693ZM25.0346 11.2558V34.4888L19.6541 37.5882L16.1828 39.5842V16.3636L25.0346 11.2558ZM25.0346 59.3582L4.66547 47.6302V11.2558L13.5173 16.3636V41.8901C13.5173 41.8901 13.5297 41.9769 13.5421 42.0637C13.5421 42.1133 13.5545 42.1753 13.5669 42.2372C13.5793 42.2868 13.6041 42.324 13.6289 42.3984C13.6537 42.4604 13.6785 42.51 13.7033 42.5472C13.7281 42.5968 13.7528 42.634 13.8148 42.7208L13.914 42.8323C13.914 42.8323 13.976 42.8943 14.0628 42.9563L25.0346 49.1799V59.3582ZM26.3735 46.8739L17.5341 41.8777L37.8908 30.1621L46.7303 35.2574L26.3735 46.8739ZM48.0692 47.6302L27.7001 59.3706V49.1799L48.0692 37.551V47.6302ZM48.0692 32.9515L39.2174 27.8561V17.7769L48.0692 22.8723V32.9515ZM59.5865 27.8561L50.7347 32.9515V22.8723L59.5865 17.7769V27.8561Z"/>
                    </svg>
                    <a class="title">Task Management</a>
                </div>
                <div class="right-side">
                    <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="logout-button">
                        <svg fill="#1C2033" width="24" height="24" version="1.1" id="lni_lni-exit" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                            <g>
                                <path d="M45.2,1.8H33.9c-2.6,0-4.8,2.2-4.8,4.8v6.9c0,1.2,1,2.2,2.2,2.2s2.3-1,2.3-2.2V6.5c0-0.2,0.1-0.3,0.3-0.3h11.3c2.4,0,4.3,1.9,4.3,4.3v42.9c0,2.4-1.9,4.3-4.3,4.3H33.9c-0.2,0-0.3-0.1-0.3-0.3v-6.9c0-1.2-1-2.2-2.3-2.2s-2.2,1-2.2,2.2v6.9c0,2.6,2.2,4.8,4.8,4.8h11.3c4.9,0,8.8-4,8.8-8.8V10.6C54,5.7,50,1.8,45.2,1.8z"/>
                                <path d="M17.6,34.2h17.9c1.2,0,2.2-1,2.2-2.2c0-1.2-1-2.2-2.2-2.2H17.7l6.2-6.3c0.9-0.9,0.9-2.3,0-3.2c-0.9-0.9-2.3-0.9-3.2,0l-10,10.2c-0.9,0.9-0.9,2.3,0,3.2l10,10.2c0.4,0.4,1,0.7,1.6,0.7c0.6,0,1.1-0.2,1.6-0.6c0.9-0.9,0.9-2.3,0-3.2L17.6,34.2z"/>
                            </g>
                        </svg>
                    </button>
                    </form>
                </div>
            </nav>
        </header>

        <div class="container">
            <main class="content">
                <div class="content-header">
                    <h2>Task List</h2>
                </div>
                <div class="card-body">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th class="description-column">Description</th>
                                <th>stakeholders</th>
                                <th>Due Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- To iterate a table row (<tr>) will be created for each task ($task) --}}
                            @foreach ($tasks as $task) 
                                <tr>
                                    <td>{{ $task->title }}</td>
                                    <td>{{ $task->description }}</td>
                                    <td>{{ $task->stakeholders }}</td>
                                    <td>{{ $task->due_date }}</td>
                                    <td>{{ $task->status }}</td>
                                    <td>
                                        <button class="nav-link edit-button" onclick="window.location.href='/task/update/{{ $task->id }}'">Edit</button>
                                        <button class="nav-link delete-button" onclick="window.location.href='/task/delete/{{ $task->id }}'">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <button id="add-button" class="nav-link add-button" onclick="window.location.href='/task/create/'">Add New Data</button>
            </main>
        </div>

        <footer>
            <div class="footer-text">
                <p>Copyright &copy; 2024 All Rights Reserved.</p>
            </div>
        </footer>
    </body>
</html>