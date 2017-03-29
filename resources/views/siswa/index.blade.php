 <h1>list siswa</h1>
 <br>
 
 @foreach ($data as $siswa)
 	{{$siswa->nama}}<br>
 	{{$siswa->kontak}}<br>
 	{{$siswa->umur}}<br>
 	<br>
 @endforeach
 	
