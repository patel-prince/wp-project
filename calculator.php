<?php $active_page = 'calculator' ?>

<?php include_once './includes/header.php' ?>

<div class="container">
    <h1 class="section-title mt-5" style="text-align: center">Calculator</h1>
    <div class="card max-w-500 m-auto">
        <div class="card-body">
            <table class="calculator table mb-0" align="center">
                <tr>
                    <td colspan="3"><input type="text" id="result" class="w-100 form-control" /></td>
                    <td><button class="btn btn-danger w-100" onclick="clr()">c</button></td>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-primary w-100" onclick="dis('1')">1</button>
                    </td>
                    <td><button class="btn btn-primary w-100" onclick="dis('2')">2</button></td>
                    <td><button class="btn btn-primary w-100" onclick="dis('3')">3</button></td>
                    <td><button class="btn btn-primary w-100" onclick="dis('/')">/</button></td>
                </tr>
                <tr>
                    <td><button class="btn btn-primary w-100" onclick="dis('4')">4</button></td>
                    <td><button class="btn btn-primary w-100" onclick="dis('5')">5</button></td>
                    <td><button class="btn btn-primary w-100" onclick="dis('6')">6</button></td>
                    <td><button class="btn btn-primary w-100" onclick="dis('-')">-</button></td>
                </tr>
                <tr>
                    <td><button class="btn btn-primary w-100" onclick="dis('7')">7</button></td>
                    <td><button class="btn btn-primary w-100" onclick="dis('8')">8</button></td>
                    <td><button class="btn btn-primary w-100" onclick="dis('9')">9</button></td>
                    <td><button class="btn btn-primary w-100" onclick="dis('+')">+</button></td>
                </tr>
                <tr>
                    <td><button class="btn btn-primary w-100" onclick="dis('.')">.</button></td>
                    <td><button class="btn btn-primary w-100" onclick="dis('0')">0</button></td>
                    <td><button class="btn btn-success w-100" onclick="solve()">=</button></td>
                    <td><button class="btn btn-primary w-100" onclick="dis('*')">*</button></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<?php include_once './includes/footer.php' ?>