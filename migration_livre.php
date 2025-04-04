public function up()
{
    Schema::create('livres', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('author');
        $table->string('genre');
        $table->integer('published_year');
        $table->boolean('available')->default(true);
        $table->timestamps();
    });
}
