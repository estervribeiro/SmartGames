package br.sp.senai.smartgames;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.ListView;

import br.sp.senai.smartgames.tasks.CarregarJogo;

public class MainActivity extends AppCompatActivity {


    public static ListView listViewJogos;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);


        listViewJogos = findViewById(R.id.main_lista_jogos);

    }

    @Override
    protected void onResume() {

        CarregarJogo carregarJogo = new CarregarJogo(this);
        carregarJogo.execute();



        super.onResume();
    }
}
