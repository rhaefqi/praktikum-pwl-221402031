@extends('admin.main')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-2">
            <h1 class="h3 mb-0 text-gray-800"> <a href="https://rhae.000webhostapp.com/tugas%202.html"> Second Chapter :
                    Getting close to her </a></h1>
        </div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <p class="h6 mb-0 text-gray-800 justify-text">
                Time over time i spent with her. <br>
                the days goes by when i'm with her,but this time i know her better than the last time
                still not knowing that she's will be the one i love the most in my entire life. <br> <br>
                Mr ivan already taught me lot of things about html adn css and now we started to study about form,
                studying about all elementf of form and its input kind, with more knowledge of css by my side
                its make me realize once again how beautiful she is.
                Something that make me can interact with her?, ofcourse halthis thing make me interested more and more
                with her, because now her beauty not only i can see but also i can feel it. <br><br>
                this is the second task with her, and again even though it look so bad but in that time i thought
                it is the most beautiful thing. <i>it is true that in past present and future she will be as beautiful as
                    she was.</i>
            </p>
        </div>

        <!-- Content Row -->
        <img src="{{ asset('asset/img/tugas2.png') }}" alt="" width="25%"><br>
        <i>
            *gambaran tugas aslinya, soalnya kalau di taruh disini css nya ketimpa hehehe
        </i>
        <div class="row">
            <div class="col">
                <div class="card mx-3 my-3" style="width: 65rem;">
                    <section class="border">
                        <form>
                            <div class="card-header">
                                <p>FORM REGISTRASI</p>
                            </div>
                            <fieldset>
                                <legend>DATA DIRI</legend>
                                <label for="nama">Nama lengkap</label>:<br>
                                <input type="text" id="nama" name="nama" placeholder="ketik nama" required>

                                <br>

                                <label for="tempat">Tempat lahir</label>:<br>
                                <input type="text" id="tempat" name="tempat" placeholder="tempat lahir" required>

                                <br>

                                <label for="lahir">tanggal lahir :</label><br>
                                <input type="date" id="lahir" name="lahir" required>

                                <br>

                                <label for="alamat">Alamat :</label><br>
                                <textarea cols="39" rows="3" required placeholder="Tulis alamatmu"></textarea>

                                <br>

                                <label for="nomor">Nomor HP :</label><br>
                                <input type="number" id="nomor" name="nomor" placeholder="nomor HP" required>

                                <br><br>

                                <label for="rank">Rank ML :</label>
                                <select id="rank" name="rank" required>
                                    <option value="#">--Pilih Rank--</option>
                                    <option value="warior">Warrior</option>
                                    <option value="elite">Elite</option>
                                    <option value="master">Master</option>
                                    <option value="grandmaster">Grandmaster</option>
                                    <option value="epic">Epic</option>
                                    <option value="legend">Legend</option>
                                    <option value="mythic">Mythic</option>
                                    <option value="mythical">Mythical Glory</option>

                                </select>

                                <br><br>

                                <label for="gender" required>Jenis kelamin :</label>
                                <input type="radio" id="gender" name="gender">laki laki
                                <input type="radio" id="gender" name="gender">perempuan

                                <br>

                                <table>
                                    <tr>
                                        <td>
                                            <label for="minat" required>Minat dan Bakat :</label>
                                        </td>
                                        <td>
                                            <input type="checkbox" id="minat" name="minat">programming<br>
                                            <input type="checkbox" id="minat" name="minat">olahraga<br>
                                            <input type="checkbox" id="minat" name="minat">tidur<br>
                                        </td>
                                    </tr>
                                </table>
                            <hr>
                            </fieldset>
                            <fieldset>
                                <legend>BUAT AKUN</legend>
                                <b>*buat akun untuk menyelesaikan registrasi</b><br><br>

                                <label for="email">Username :</label><br>
                                <input type="email" id="email" name="email" placeholder="username@gmail.com"
                                    required>

                                <br>

                                <label for="pw">Password :</label><br>
                                <input type="password" id="pw" name="pw" placeholder="masukan password" required
                                    pattern=".{8,}" title="Must contain at least 8 or more characters">

                            </fieldset>
                            <a>
                                <input type="submit" value="Kirim">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="reset" value="Hapus">
                            </a>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
