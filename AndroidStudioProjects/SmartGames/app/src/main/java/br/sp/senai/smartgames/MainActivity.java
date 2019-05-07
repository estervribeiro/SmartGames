package br.sp.senai.smartgames;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ListView;
import android.widget.Toast;

import br.sp.senai.smartgames.model.Jogo;
import br.sp.senai.smartgames.tasks.CarregarJogo;

public class MainActivity extends AppCompatActivity {


    public static ListView listViewJogos;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        Toast.makeText(this, "Teste", Toast.LENGTH_LONG).show();
        listViewJogos = findViewById(R.id.main_lista_jogos);


        //criando um ouvinte pro liste view para quando for clicado em um item da lista
        listViewJogos.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
                //adarter view permite que vc veja o que esta na array

                //
                Jogo jogo = (Jogo) listViewJogos.getItemAtPosition(position);

                //criando intentt e dizendo da onde eu quero que venha e aonde abre
                Intent intentJogo = new Intent(MainActivity.this, ActivityVisualizar.class);

                intentJogo.putExtra("jogo", jogo);

                //startando a activity com a intent
                startActivity(intentJogo);

            }
        });



    }

    @Override
    protected void onResume() {

        CarregarJogo carregarJogo = new CarregarJogo(this);
        carregarJogo.execute();

        super.onResume();
    }
}
