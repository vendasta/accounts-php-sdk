<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: accounts/v1/api.proto

namespace GPBMetadata\Accounts\V1;

class Api
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Accounts\V1\ActivationEvent::initOnce();
        \GPBMetadata\Accounts\V1\Addons::initOnce();
        \GPBMetadata\Accounts\V1\Blame::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aec6d0a156163636f756e74732f76312f6170692e70726f746f120b6163" .
            "636f756e74732e76311a186163636f756e74732f76312f6164646f6e732e" .
            "70726f746f1a176163636f756e74732f76312f626c616d652e70726f746f" .
            "1a1b676f6f676c652f70726f746f6275662f656d7074792e70726f746f1a" .
            "1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f" .
            "746f22ed050a074163636f756e7412120a0a6163636f756e745f69641801" .
            "2001280912130a0b627573696e6573735f696418022001280912120a0a70" .
            "6172746e65725f696418032001280912120a0a70726f647563745f696418" .
            "0420012809120e0a066170705f696418052001280912180a10637573746f" .
            "6d5f656e7472795f75726c180620012809121a0a12757365725f636f6e74" .
            "6163745f656d61696c180720012809122e0a0a61637469766174696f6e18" .
            "082001280b321a2e676f6f676c652e70726f746f6275662e54696d657374" .
            "616d7012300a0c646561637469766174696f6e18092001280b321a2e676f" .
            "6f676c652e70726f746f6275662e54696d657374616d70120d0a05747269" .
            "616c180a2001280812200a186f726465725f666f726d5f7375626d697373" .
            "696f6e5f6964180b20012809122b0a0f61637469766174696f6e5f696e66" .
            "6f180c2001280b32122e6163636f756e74732e76312e426c616d65122d0a" .
            "11646561637469766174696f6e5f696e666f180d2001280b32122e616363" .
            "6f756e74732e76312e426c616d6512380a10616e6e69766572736172795f" .
            "64617465180e2001280b321a2e676f6f676c652e70726f746f6275662e54" .
            "696d657374616d704202180112320a06737461747573180f2001280e3222" .
            "2e6163636f756e74732e76312e4163636f756e742e4163636f756e745374" .
            "6174757312370a0f636f6d6d69746d656e745f6461746518102001280b32" .
            "1a2e676f6f676c652e70726f746f6275662e54696d657374616d70420218" .
            "0112140a0c69735f73757370656e64656418112001280812180a1062696c" .
            "6c696e675f6f726465725f6964181220012809121d0a1561637469766174" .
            "696f6e5f64657363726970746f7218132001280912150a0d616374697661" .
            "74696f6e5f696418142001280912120a0a65646974696f6e5f6964181520" .
            "012809223b0a0d4163636f756e74537461747573120a0a06414354495645" .
            "1000120d0a0943414e43454c4c45441001120f0a0b444541435449564154" .
            "4544100222a9020a0c4163636f756e74446174657312130a0b627573696e" .
            "6573735f6964180120012809120e0a066170705f69641802200128091210" .
            "0a086164646f6e5f696418032001280912150a0d61637469766174696f6e" .
            "5f6964180420012809122e0a0a61637469766174696f6e18052001280b32" .
            "1a2e676f6f676c652e70726f746f6275662e54696d657374616d7012300a" .
            "0c646561637469766174696f6e18062001280b321a2e676f6f676c652e70" .
            "726f746f6275662e54696d657374616d7012340a10616e6e697665727361" .
            "72795f6461746518072001280b321a2e676f6f676c652e70726f746f6275" .
            "662e54696d657374616d7012330a0f636f6d6d69746d656e745f64617465" .
            "18082001280b321a2e676f6f676c652e70726f746f6275662e54696d6573" .
            "74616d7022d6030a1150656e64696e6741637469766174696f6e12150a0d" .
            "61637469766174696f6e5f696418012001280912130a0b627573696e6573" .
            "735f696418022001280912350a0673746174757318032001280e32252e61" .
            "63636f756e74732e76312e50656e64696e6741637469766174696f6e2e53" .
            "746174757312170a0f72656a65637465645f726561736f6e180420012809" .
            "12140a0c6469736d69737365645f627918052001280912300a0c63726561" .
            "7465645f6461746518062001280b321a2e676f6f676c652e70726f746f62" .
            "75662e54696d657374616d7012300a0c757064617465645f646174651807" .
            "2001280b321a2e676f6f676c652e70726f746f6275662e54696d65737461" .
            "6d70122e0a0e6170705f61637469766174696f6e18082001280b32142e61" .
            "63636f756e74732e76312e4163636f756e74480012380a106164646f6e5f" .
            "61637469766174696f6e18092001280b321c2e6163636f756e74732e7631" .
            "2e4164646f6e41637469766174696f6e4800120e0a066170705f6964180a" .
            "2001280912100a086164646f6e5f6964180b2001280922310a0653746174" .
            "7573120b0a0750454e44494e471000120c0a08415050524f564544100112" .
            "0c0a0852454a45435445441002420c0a0a61637469766174696f6e22c102" .
            "0a1350656e64696e67446561637469766174696f6e12150a0d6163746976" .
            "6174696f6e5f696418012001280912130a0b627573696e6573735f696418" .
            "0220012809120e0a066170705f696418032001280912100a086164646f6e" .
            "5f696418042001280912120a0a706172746e65725f696418052001280912" .
            "2d0a11646561637469766174696f6e5f696e666f18062001280b32122e61" .
            "63636f756e74732e76312e426c616d6512300a0c637265617465645f6461" .
            "746518072001280b321a2e676f6f676c652e70726f746f6275662e54696d" .
            "657374616d7012300a0c757064617465645f6461746518082001280b321a" .
            "2e676f6f676c652e70726f746f6275662e54696d657374616d7012350a11" .
            "646561637469766174696f6e5f6461746518092001280b321a2e676f6f67" .
            "6c652e70726f746f6275662e54696d657374616d702294020a1441637469" .
            "766174654164646f6e5265717565737412130a0b627573696e6573735f69" .
            "64180120012809120e0a066170705f696418022001280912100a08616464" .
            "6f6e5f696418032001280912120a0a706172746e65725f69641804200128" .
            "0912200a186f726465725f666f726d5f7375626d697373696f6e5f696418" .
            "0520012809122f0a0b61637469766174655f6f6e18062001280b321a2e67" .
            "6f6f676c652e70726f746f6275662e54696d657374616d7012310a0d6465" .
            "61637469766174655f6f6e18072001280b321a2e676f6f676c652e70726f" .
            "746f6275662e54696d657374616d70122b0a0f61637469766174696f6e5f" .
            "696e666f18082001280b32122e6163636f756e74732e76312e426c616d65" .
            "22e3010a16446561637469766174654164646f6e5265717565737412130a" .
            "0b627573696e6573735f6964180120012809120e0a066170705f69641802" .
            "2001280912100a086164646f6e5f696418032001280912150a0d61637469" .
            "766174696f6e5f696418042001280912120a0a706172746e65725f696418" .
            "0520012809122d0a11646561637469766174696f6e5f696e666f18062001" .
            "280b32122e6163636f756e74732e76312e426c616d6512380a1164656163" .
            "7469766174696f6e5f7479706518072001280e321d2e6163636f756e7473" .
            "2e76312e446561637469766174696f6e5479706522a3020a124163746976" .
            "6174654170705265717565737412130a0b627573696e6573735f69641801" .
            "20012809120e0a066170705f696418022001280912120a0a706172746e65" .
            "725f696418032001280912200a186f726465725f666f726d5f7375626d69" .
            "7373696f6e5f6964180420012809122f0a0b61637469766174655f6f6e18" .
            "052001280b321a2e676f6f676c652e70726f746f6275662e54696d657374" .
            "616d7012310a0d646561637469766174655f6f6e18062001280b321a2e67" .
            "6f6f676c652e70726f746f6275662e54696d657374616d70120d0a057472" .
            "69616c180720012808122b0a0f61637469766174696f6e5f696e666f1808" .
            "2001280b32122e6163636f756e74732e76312e426c616d6512120a0a6564" .
            "6974696f6e5f696418092001280922bb010a144465616374697661746541" .
            "70705265717565737412130a0b627573696e6573735f6964180120012809" .
            "120e0a066170705f6964180220012809122d0a1164656163746976617469" .
            "6f6e5f696e666f18032001280b32122e6163636f756e74732e76312e426c" .
            "616d6512380a11646561637469766174696f6e5f7479706518042001280e" .
            "321d2e6163636f756e74732e76312e446561637469766174696f6e547970" .
            "6512150a0d61637469766174696f6e5f69641805200128092297010a1443" .
            "68616e676545646974696f6e5265717565737412130a0b627573696e6573" .
            "735f6964180120012809120e0a066170705f696418022001280912150a0d" .
            "61637469766174696f6e5f696418032001280912120a0a65646974696f6e" .
            "5f6964180420012809122f0a136368616e67655f65646974696f6e5f696e" .
            "666f18052001280b32122e6163636f756e74732e76312e426c616d652242" .
            "0a1b4c6973744164646f6e41637469766174696f6e735265717565737412" .
            "130a0b627573696e6573735f6964180120012809120e0a066170705f6964" .
            "18022001280922510a1c4c6973744164646f6e41637469766174696f6e73" .
            "526573706f6e736512310a0b61637469766174696f6e7318012003280b32" .
            "1c2e6163636f756e74732e76312e4164646f6e41637469766174696f6e22" .
            "9a020a0d4372656174655265717565737412170a0b627573696e6573735f" .
            "69641801200128094202180112160a0a6163636f756e745f696418022001" .
            "28094202180112120a066170705f69641803200128094202180112160a0a" .
            "70726f647563745f696418042001280942021801121c0a10637573746f6d" .
            "5f656e7472795f75726c18052001280942021801121e0a12757365725f63" .
            "6f6e746163745f656d61696c1806200128094202180112110a0574726961" .
            "6c1807200128084202180112350a0d646561637469766174655f6f6e1808" .
            "2001280b321a2e676f6f676c652e70726f746f6275662e54696d65737461" .
            "6d704202180112240a186f726465725f666f726d5f7375626d697373696f" .
            "6e5f696418092001280942021801226d0a0a476574526571756573741213" .
            "0a0b627573696e6573735f6964180120012809120e0a066170705f696418" .
            "022001280912120a0a6163636f756e745f696418032001280912120a0a70" .
            "726f647563745f696418042001280912120a0a706172746e65725f696418" .
            "052001280922b8010a0f4765744d756c74695265717565737412510a1661" .
            "637469766174696f6e5f6964656e7469666965727318012003280b32312e" .
            "6163636f756e74732e76312e4765744d756c7469526571756573742e4163" .
            "7469766174696f6e4964656e7469666965721a520a144163746976617469" .
            "6f6e4964656e746966696572120e0a066170705f69641801200128091213" .
            "0a0b627573696e6573735f696418022001280912150a0d61637469766174" .
            "696f6e5f696418032001280922590a0b4c6973745265717565737412130a" .
            "0b627573696e6573735f6964180120012809120e0a06637572736f721802" .
            "2001280912110a09706167655f73697a6518032001280312120a0a706172" .
            "746e65725f696418042001280922510a174c6973744163636f756e744461" .
            "7465735265717565737412130a0b627573696e6573735f69641801200128" .
            "09120e0a06637572736f7218022001280912110a09706167655f73697a65" .
            "18032001280322e4010a0d44656c6574655265717565737412130a0b6275" .
            "73696e6573735f6964180120012809120e0a066170705f69641802200128" .
            "0912160a0a6163636f756e745f69641803200128094202180112160a0a70" .
            "726f647563745f696418042001280942021801122d0a1164656163746976" .
            "6174696f6e5f696e666f18052001280b32122e6163636f756e74732e7631" .
            "2e426c616d6512380a11646561637469766174696f6e5f74797065180620" .
            "01280e321d2e6163636f756e74732e76312e446561637469766174696f6e" .
            "5479706512150a0d61637469766174696f6e5f6964180720012809229501" .
            "0a135570646174654578706972795265717565737412130a0b627573696e" .
            "6573735f6964180120012809120e0a066170705f69641802200128091212" .
            "0a0a6163636f756e745f696418032001280912310a0d6465616374697661" .
            "74655f6f6e18042001280b321a2e676f6f676c652e70726f746f6275662e" .
            "54696d657374616d7012120a0a70726f647563745f696418052001280922" .
            "7e0a135365744175746f52656e65775265717565737412130a0b62757369" .
            "6e6573735f6964180120012809120e0a066170705f696418022001280912" .
            "100a086164646f6e5f696418032001280912300a0d72656e6577616c5f73" .
            "7461746518042001280e32192e6163636f756e74732e76312e52656e6577" .
            "616c53746174652285010a1f4469736d69737350656e64696e6741637469" .
            "766174696f6e5265717565737412150a0d61637469766174696f6e5f6964" .
            "18012001280912140a0c6469736d69737365645f62791802200128091213" .
            "0a0b627573696e6573735f6964180320012809120e0a066170705f696418" .
            "042001280912100a086164646f6e5f696418052001280922cd010a1f5265" .
            "736f6c766550656e64696e6741637469766174696f6e5265717565737412" .
            "150a0d61637469766174696f6e5f696418012001280912100a0861707072" .
            "6f76656418022001280812170a0f72656a65637465645f726561736f6e18" .
            "032001280912120a0a6163636f756e745f696418042001280912130a0b62" .
            "7573696e6573735f6964180520012809120e0a066170705f696418062001" .
            "280912100a086164646f6e5f6964180720012809121d0a15616374697661" .
            "74696f6e5f64657363726970746f72180820012809228a010a155265736f" .
            "6c766542696c6c696e675265717565737412170a0b637573746f6d65725f" .
            "696418012001280942021801120f0a03736b751802200128094202180112" .
            "140a086f726465725f69641803200128094202180112140a08617070726f" .
            "76656418042001280842021801121b0a0f72656a65637465645f72656173" .
            "6f6e1805200128094202180122630a1c4c69737450656e64696e67416374" .
            "69766174696f6e52657175657374120e0a066170705f6964180120012809" .
            "12100a086164646f6e5f6964180220012809120e0a06637572736f721803" .
            "2001280912110a09706167655f73697a6518042001280322380a13506167" .
            "6564526571756573744f7074696f6e73120e0a06637572736f7218012001" .
            "280912110a09706167655f73697a6518022001280322550a155061676564" .
            "526573706f6e73654d6574616461746112130a0b6e6578745f637572736f" .
            "7218012001280912100a086861735f6d6f726518022001280812150a0d74" .
            "6f74616c5f726573756c747318032001280322790a294c69737450656e64" .
            "696e67446561637469766174696f6e73466f72506172746e657252657175" .
            "65737412120a0a706172746e65725f696418012001280912380a0e706167" .
            "696e675f6f7074696f6e7318022001280b32202e6163636f756e74732e76" .
            "312e5061676564526571756573744f7074696f6e73228a010a2c4c697374" .
            "50656e64696e67446561637469766174696f6e73466f724170704f724164" .
            "646f6e52657175657374120e0a066170705f696418022001280912100a08" .
            "6164646f6e5f696418032001280912380a0e706167696e675f6f7074696f" .
            "6e7318042001280b32202e6163636f756e74732e76312e50616765645265" .
            "71756573744f7074696f6e7322620a284c69737450656e64696e67416374" .
            "69766174696f6e73466f72427573696e6573735265717565737412130a0b" .
            "627573696e6573735f6964180120012809120e0a06637572736f72180220" .
            "01280912110a09706167655f73697a651803200128032283010a1d4c6973" .
            "7450656e64696e6741637469766174696f6e526573706f6e7365123b0a13" .
            "70656e64696e675f61637469766174696f6e7318012003280b321e2e6163" .
            "636f756e74732e76312e50656e64696e6741637469766174696f6e12130a" .
            "0b6e6578745f637572736f7218022001280912100a086861735f6d6f7265" .
            "180320012808229d010a1f4c69737450656e64696e674465616374697661" .
            "74696f6e526573706f6e7365123d0a1370656e64696e675f616374697661" .
            "74696f6e7318012003280b32202e6163636f756e74732e76312e50656e64" .
            "696e67446561637469766174696f6e123b0a0f706167696e675f6d657461" .
            "6461746118022001280b32222e6163636f756e74732e76312e5061676564" .
            "526573706f6e73654d65746164617461226d0a1b47657450656e64696e67" .
            "41637469766174696f6e5265717565737412150a0d61637469766174696f" .
            "6e5f696418012001280912130a0b627573696e6573735f69641802200128" .
            "09120e0a066170705f696418032001280912120a0a6163636f756e745f69" .
            "64180420012809225a0a1c47657450656e64696e6741637469766174696f" .
            "6e526573706f6e7365123a0a1270656e64696e675f61637469766174696f" .
            "6e18012001280b321e2e6163636f756e74732e76312e50656e64696e6741" .
            "637469766174696f6e22500a1541637469766174654164646f6e52657370" .
            "6f6e736512150a0d61637469766174696f6e5f696418012001280912200a" .
            "186f726465725f666f726d5f7375626d697373696f6e5f69641802200128" .
            "0922400a134163746976617465417070526573706f6e736512120a0a6163" .
            "636f756e745f696418012001280912150a0d61637469766174696f6e5f69" .
            "6418022001280922510a0e437265617465526573706f6e736512190a0d61" .
            "637469766174696f6e5f69641801200128094202180112240a186f726465" .
            "725f666f726d5f7375626d697373696f6e5f696418022001280942021801" .
            "22340a0b476574526573706f6e736512250a076163636f756e7418012001" .
            "280b32142e6163636f756e74732e76312e4163636f756e74223a0a104765" .
            "744d756c7469526573706f6e736512260a086163636f756e747318012003" .
            "280b32142e6163636f756e74732e76312e4163636f756e7422740a0c4c69" .
            "7374526573706f6e736512260a086163636f756e747318012003280b3214" .
            "2e6163636f756e74732e76312e4163636f756e7412130a0b6e6578745f63" .
            "7572736f7218022001280912100a086861735f6d6f726518032001280812" .
            "150a0d746f74616c5f726573756c747318042001280322730a184c697374" .
            "4163636f756e744461746573526573706f6e736512300a0d6163636f756e" .
            "745f646174657318012003280b32192e6163636f756e74732e76312e4163" .
            "636f756e74446174657312130a0b6e6578745f637572736f721802200128" .
            "0912100a086861735f6d6f726518032001280822b3020a2c4c6973744163" .
            "7469766174696f6e4576656e74486973746f7279466f72427573696e6573" .
            "735265717565737412130a0b627573696e6573735f696418012001280912" .
            "0e0a06637572736f7218022001280912110a09706167655f73697a651803" .
            "200128031284010a0e66696c7465725f6f7074696f6e7318042001280b32" .
            "6c2e6163636f756e74732e76312e4c69737441637469766174696f6e4576" .
            "656e74486973746f7279466f72427573696e657373526571756573742e4c" .
            "69737441637469766174696f6e4576656e74486973746f7279466f724275" .
            "73696e65737346696c7465724f7074696f6e731a440a324c697374416374" .
            "69766174696f6e4576656e74486973746f7279466f72427573696e657373" .
            "46696c7465724f7074696f6e73120e0a066170705f696418012001280922" .
            "9c010a2d4c69737441637469766174696f6e4576656e74486973746f7279" .
            "466f72427573696e657373526573706f6e736512440a1861637469766174" .
            "696f6e5f686973746f72795f6974656d7318012003280b32222e6163636f" .
            "756e74732e76312e41637469766174696f6e486973746f72794974656d12" .
            "130a0b6e6578745f637572736f7218022001280912100a086861735f6d6f" .
            "726518032001280822ea010a23476574446561637469766174696f6e5265" .
            "61736f6e73466f7241707052657175657374120e0a066170705f69641801" .
            "2001280912720a0e66696c7465725f6f7074696f6e7318022001280b325a" .
            "2e6163636f756e74732e76312e476574446561637469766174696f6e5265" .
            "61736f6e73466f72417070526571756573742e4765744465616374697661" .
            "74696f6e526561736f6e73466f7241707046696c7465724f7074696f6e73" .
            "1a3f0a29476574446561637469766174696f6e526561736f6e73466f7241" .
            "707046696c7465724f7074696f6e7312120a0a706172746e65725f696418" .
            "012001280922730a24476574446561637469766174696f6e526561736f6e" .
            "73466f72417070526573706f6e7365124b0a1b646561637469766174696f" .
            "6e5f726561736f6e5f73756d6d61727918012003280b32262e6163636f75" .
            "6e74732e76312e446561637469766174696f6e526561736f6e53756d6d61" .
            "727922aa020a2a4c697374437573746f6d446561637469766174696f6e52" .
            "6561736f6e73466f7241707052657175657374120e0a066170705f696418" .
            "0120012809120e0a06637572736f7218022001280912110a09706167655f" .
            "73697a651803200128031280010a0e66696c7465725f6f7074696f6e7318" .
            "042001280b32682e6163636f756e74732e76312e4c697374437573746f6d" .
            "446561637469766174696f6e526561736f6e73466f724170705265717565" .
            "73742e4c697374437573746f6d446561637469766174696f6e526561736f" .
            "6e73466f7241707046696c7465724f7074696f6e731a460a304c69737443" .
            "7573746f6d446561637469766174696f6e526561736f6e73466f72417070" .
            "46696c7465724f7074696f6e7312120a0a706172746e65725f6964180120" .
            "01280922a1010a2b4c697374437573746f6d446561637469766174696f6e" .
            "526561736f6e73466f72417070526573706f6e7365124b0a1b6465616374" .
            "69766174696f6e5f726561736f6e5f73756d6d61727918012003280b3226" .
            "2e6163636f756e74732e76312e446561637469766174696f6e526561736f" .
            "6e53756d6d61727912130a0b6e6578745f637572736f7218022001280912" .
            "100a086861735f6d6f7265180320012808229d020a274c69737444656163" .
            "74697661746564427573696e657373494473466f72417070526571756573" .
            "74120e0a066170705f6964180120012809120e0a06637572736f72180220" .
            "01280912110a09706167655f73697a65180320012803127a0a0e66696c74" .
            "65725f6f7074696f6e7318042001280b32622e6163636f756e74732e7631" .
            "2e4c6973744465616374697661746564427573696e657373494473466f72" .
            "417070526571756573742e4c697374446561637469766174656442757369" .
            "6e657373494473466f7241707046696c7465724f7074696f6e731a430a2d" .
            "4c6973744465616374697661746564427573696e657373494473466f7241" .
            "707046696c7465724f7074696f6e7312120a0a706172746e65725f696418" .
            "012001280922670a284c6973744465616374697661746564427573696e65" .
            "7373494473466f72417070526573706f6e736512140a0c627573696e6573" .
            "735f69647318012003280912130a0b6e6578745f637572736f7218022001" .
            "280912100a086861735f6d6f7265180320012808224f0a28476574417070" .
            "41637469766174696f6e537461747573466f72427573696e657373526571" .
            "75657374120e0a066170705f696418012001280912130a0b627573696e65" .
            "73735f696418022001280922b2010a294765744170704163746976617469" .
            "6f6e537461747573466f72427573696e657373526573706f6e736512570a" .
            "0673746174757318012001280b32472e6163636f756e74732e76312e4765" .
            "7441707041637469766174696f6e537461747573466f72427573696e6573" .
            "73526573706f6e73652e41637469766174696f6e5374617475731a2c0a10" .
            "41637469766174696f6e53746174757312180a1063757272656e746c795f" .
            "616374697665180120012808223a0a1243616e4163746976617465526571" .
            "75657374120f0a076170705f69647318012003280912130a0b627573696e" .
            "6573735f69641802200128092289020a1343616e41637469766174655265" .
            "73706f6e7365124c0a10696e76616c69645f726573706f6e736518012001" .
            "280b32302e6163636f756e74732e76312e43616e41637469766174655265" .
            "73706f6e73652e496e76616c6964526573706f6e73654800124c0a107375" .
            "63636573735f726573706f6e736518022001280b32302e6163636f756e74" .
            "732e76312e43616e4163746976617465526573706f6e73652e5375636365" .
            "7373526573706f6e736548001a2a0a0f496e76616c6964526573706f6e73" .
            "6512170a0f696e76616c69645f6170705f6964731801200328091a110a0f" .
            "53756363657373526573706f6e736542170a1563616e5f61637469766174" .
            "655f726573706f6e736522760a11556e646f43616e63656c526571756573" .
            "74120e0a066170705f696418012001280912130a0b627573696e6573735f" .
            "696418022001280912150a0d61637469766174696f6e5f69641803200128" .
            "0912250a09756e646f5f696e666f18042001280b32122e6163636f756e74" .
            "732e76312e426c616d6522b6020a354c69737441707073416e644164646f" .
            "6e7341637469766174696f6e5374617475736573466f72427573696e6573" .
            "735265717565737412130a0b627573696e6573735f696418012001280912" .
            "700a0766696c7465727318022001280b325f2e6163636f756e74732e7631" .
            "2e4c69737441707073416e644164646f6e7341637469766174696f6e5374" .
            "617475736573466f72427573696e657373526571756573742e4170704163" .
            "7469766174696f6e537461747573657346696c746572731a760a1c417070" .
            "41637469766174696f6e537461747573657346696c7465727312450a1361" .
            "637469766174696f6e5f737461747573657318012003280e32282e616363" .
            "6f756e74732e76312e417070416e644164646f6e41637469766174696f6e" .
            "537461747573120f0a076170705f69647318022003280922b9020a374c69" .
            "737441707073416e644164646f6e7341637469766174696f6e7353746174" .
            "75736573466f72427573696e657373526573706f6e73651281010a136163" .
            "7469766174696f6e5f737461747573657318012003280b32642e6163636f" .
            "756e74732e76312e4c69737441707073416e644164646f6e734163746976" .
            "6174696f6e735374617475736573466f72427573696e657373526573706f" .
            "6e73652e41707073416e644164646f6e7341637469766174696f6e537461" .
            "74757365731a7a0a1f41707073416e644164646f6e734163746976617469" .
            "6f6e5374617475736573120e0a066170705f696418012001280912380a06" .
            "73746174757318022001280e32282e6163636f756e74732e76312e417070" .
            "416e644164646f6e41637469766174696f6e537461747573120d0a05636f" .
            "756e74180320012803223f0a1853757370656e6441637469766174696f6e" .
            "52657175657374120e0a066170705f696418012001280912130a0b627573" .
            "696e6573735f696418022001280922410a1a556e73757370656e64416374" .
            "69766174696f6e52657175657374120e0a066170705f6964180120012809" .
            "12130a0b627573696e6573735f696418022001280922330a1c48616e646c" .
            "65427573696e65737344656c657465645265717565737412130a0b627573" .
            "696e6573735f6964180120012809229a010a2a476574457374696d617465" .
            "6442696c6c61626c65526576656e7565496e506572696f64526571756573" .
            "74120e0a066170705f6964180120012809122e0a0a73746172745f646174" .
            "6518022001280b321a2e676f6f676c652e70726f746f6275662e54696d65" .
            "7374616d70122c0a08656e645f6461746518032001280b321a2e676f6f67" .
            "6c652e70726f746f6275662e54696d657374616d70223f0a2b4765744573" .
            "74696d6174656442696c6c61626c65526576656e7565496e506572696f64" .
            "526573706f6e736512100a08657374696d6174651801200128032aa8010a" .
            "10446561637469766174696f6e5479706512230a1f444541435449564154" .
            "494f4e5f545950455f4e4f545f5350454349464945441000121c0a184445" .
            "41435449564154494f4e5f545950455f43414e43454c1001121f0a1b4445" .
            "41435449564154494f4e5f545950455f494d4d454449415445100212300a" .
            "2c444541435449564154494f4e5f545950455f494d4d4544494154455f41" .
            "4e445f53544f505f42494c4c494e4710032a1f0a0c52656e6577616c5374" .
            "61746512060a024f4e100012070a034f464610012a5a0a1b417070416e64" .
            "4164646f6e41637469766174696f6e53746174757312110a0d4e4f545f53" .
            "50454349464945441000120d0a094143544956415445441001120b0a0750" .
            "454e44494e471002120c0a0843414e43454c4544100332f61a0a0f416363" .
            "6f756e74735365727669636512560a0d41637469766174654164646f6e12" .
            "212e6163636f756e74732e76312e41637469766174654164646f6e526571" .
            "756573741a222e6163636f756e74732e76312e4163746976617465416464" .
            "6f6e526573706f6e7365124e0a0f446561637469766174654164646f6e12" .
            "232e6163636f756e74732e76312e446561637469766174654164646f6e52" .
            "6571756573741a162e676f6f676c652e70726f746f6275662e456d707479" .
            "12500a0b4163746976617465417070121f2e6163636f756e74732e76312e" .
            "4163746976617465417070526571756573741a202e6163636f756e74732e" .
            "76312e4163746976617465417070526573706f6e7365124a0a0d44656163" .
            "74697661746541707012212e6163636f756e74732e76312e446561637469" .
            "76617465417070526571756573741a162e676f6f676c652e70726f746f62" .
            "75662e456d707479124a0a0d4368616e676545646974696f6e12212e6163" .
            "636f756e74732e76312e4368616e676545646974696f6e52657175657374" .
            "1a162e676f6f676c652e70726f746f6275662e456d70747912440a0a556e" .
            "646f43616e63656c121e2e6163636f756e74732e76312e556e646f43616e" .
            "63656c526571756573741a162e676f6f676c652e70726f746f6275662e45" .
            "6d707479126b0a144c6973744164646f6e41637469766174696f6e731228" .
            "2e6163636f756e74732e76312e4c6973744164646f6e4163746976617469" .
            "6f6e73526571756573741a292e6163636f756e74732e76312e4c69737441" .
            "64646f6e41637469766174696f6e73526573706f6e736512410a06437265" .
            "617465121a2e6163636f756e74732e76312e437265617465526571756573" .
            "741a1b2e6163636f756e74732e76312e437265617465526573706f6e7365" .
            "123c0a0644656c657465121a2e6163636f756e74732e76312e44656c6574" .
            "65526571756573741a162e676f6f676c652e70726f746f6275662e456d70" .
            "747912380a0347657412172e6163636f756e74732e76312e476574526571" .
            "756573741a182e6163636f756e74732e76312e476574526573706f6e7365" .
            "12470a084765744d756c7469121c2e6163636f756e74732e76312e476574" .
            "4d756c7469526571756573741a1d2e6163636f756e74732e76312e476574" .
            "4d756c7469526573706f6e7365123b0a044c69737412182e6163636f756e" .
            "74732e76312e4c697374526571756573741a192e6163636f756e74732e76" .
            "312e4c697374526573706f6e7365125f0a104c6973744163636f756e7444" .
            "6174657312242e6163636f756e74732e76312e4c6973744163636f756e74" .
            "4461746573526571756573741a252e6163636f756e74732e76312e4c6973" .
            "744163636f756e744461746573526573706f6e736512480a0c5570646174" .
            "6545787069727912202e6163636f756e74732e76312e5570646174654578" .
            "70697279526571756573741a162e676f6f676c652e70726f746f6275662e" .
            "456d70747912600a184469736d69737350656e64696e6741637469766174" .
            "696f6e122c2e6163636f756e74732e76312e4469736d69737350656e6469" .
            "6e6741637469766174696f6e526571756573741a162e676f6f676c652e70" .
            "726f746f6275662e456d70747912600a185265736f6c766550656e64696e" .
            "6741637469766174696f6e122c2e6163636f756e74732e76312e5265736f" .
            "6c766550656e64696e6741637469766174696f6e526571756573741a162e" .
            "676f6f676c652e70726f746f6275662e456d707479126f0a164c69737450" .
            "656e64696e6741637469766174696f6e7312292e6163636f756e74732e76" .
            "312e4c69737450656e64696e6741637469766174696f6e52657175657374" .
            "1a2a2e6163636f756e74732e76312e4c69737450656e64696e6741637469" .
            "766174696f6e526573706f6e7365128a010a224c69737450656e64696e67" .
            "446561637469766174696f6e73466f72506172746e657212362e6163636f" .
            "756e74732e76312e4c69737450656e64696e67446561637469766174696f" .
            "6e73466f72506172746e6572526571756573741a2c2e6163636f756e7473" .
            "2e76312e4c69737450656e64696e67446561637469766174696f6e526573" .
            "706f6e73651290010a254c69737450656e64696e67446561637469766174" .
            "696f6e73466f724170704f724164646f6e12392e6163636f756e74732e76" .
            "312e4c69737450656e64696e67446561637469766174696f6e73466f7241" .
            "70704f724164646f6e526571756573741a2c2e6163636f756e74732e7631" .
            "2e4c69737450656e64696e67446561637469766174696f6e526573706f6e" .
            "73651286010a214c69737450656e64696e6741637469766174696f6e7346" .
            "6f72427573696e65737312352e6163636f756e74732e76312e4c69737450" .
            "656e64696e6741637469766174696f6e73466f72427573696e6573735265" .
            "71756573741a2a2e6163636f756e74732e76312e4c69737450656e64696e" .
            "6741637469766174696f6e526573706f6e7365126b0a1447657450656e64" .
            "696e6741637469766174696f6e12282e6163636f756e74732e76312e4765" .
            "7450656e64696e6741637469766174696f6e526571756573741a292e6163" .
            "636f756e74732e76312e47657450656e64696e6741637469766174696f6e" .
            "526573706f6e7365124c0a0e5265736f6c766542696c6c696e6712222e61" .
            "63636f756e74732e76312e5265736f6c766542696c6c696e675265717565" .
            "73741a162e676f6f676c652e70726f746f6275662e456d707479128f010a" .
            "204c6973744465616374697661746564427573696e657373494473466f72" .
            "41707012342e6163636f756e74732e76312e4c6973744465616374697661" .
            "746564427573696e657373494473466f72417070526571756573741a352e" .
            "6163636f756e74732e76312e4c6973744465616374697661746564427573" .
            "696e657373494473466f72417070526573706f6e7365129e010a254c6973" .
            "7441637469766174696f6e4576656e74486973746f7279466f7242757369" .
            "6e65737312392e6163636f756e74732e76312e4c69737441637469766174" .
            "696f6e4576656e74486973746f7279466f72427573696e65737352657175" .
            "6573741a3a2e6163636f756e74732e76312e4c6973744163746976617469" .
            "6f6e4576656e74486973746f7279466f72427573696e657373526573706f" .
            "6e73651283010a1c476574446561637469766174696f6e526561736f6e73" .
            "466f7241707012302e6163636f756e74732e76312e476574446561637469" .
            "766174696f6e526561736f6e73466f72417070526571756573741a312e61" .
            "63636f756e74732e76312e476574446561637469766174696f6e52656173" .
            "6f6e73466f72417070526573706f6e73651298010a234c69737443757374" .
            "6f6d446561637469766174696f6e526561736f6e73466f7241707012372e" .
            "6163636f756e74732e76312e4c697374437573746f6d4465616374697661" .
            "74696f6e526561736f6e73466f72417070526571756573741a382e616363" .
            "6f756e74732e76312e4c697374437573746f6d446561637469766174696f" .
            "6e526561736f6e73466f72417070526573706f6e73651292010a21476574" .
            "41707041637469766174696f6e537461747573466f72427573696e657373" .
            "12352e6163636f756e74732e76312e47657441707041637469766174696f" .
            "6e537461747573466f72427573696e657373526571756573741a362e6163" .
            "636f756e74732e76312e47657441707041637469766174696f6e53746174" .
            "7573466f72427573696e657373526573706f6e736512500a0b43616e4163" .
            "746976617465121f2e6163636f756e74732e76312e43616e416374697661" .
            "7465526571756573741a202e6163636f756e74732e76312e43616e416374" .
            "6976617465526573706f6e736512ba010a2e4c69737441707073416e6441" .
            "64646f6e7341637469766174696f6e5374617475736573466f7242757369" .
            "6e65737312422e6163636f756e74732e76312e4c69737441707073416e64" .
            "4164646f6e7341637469766174696f6e5374617475736573466f72427573" .
            "696e657373526571756573741a442e6163636f756e74732e76312e4c6973" .
            "7441707073416e644164646f6e7341637469766174696f6e735374617475" .
            "736573466f72427573696e657373526573706f6e736512520a1153757370" .
            "656e6441637469766174696f6e12252e6163636f756e74732e76312e5375" .
            "7370656e6441637469766174696f6e526571756573741a162e676f6f676c" .
            "652e70726f746f6275662e456d70747912560a13556e73757370656e6441" .
            "637469766174696f6e12272e6163636f756e74732e76312e556e73757370" .
            "656e6441637469766174696f6e526571756573741a162e676f6f676c652e" .
            "70726f746f6275662e456d707479125a0a1548616e646c65427573696e65" .
            "737344656c6574656412292e6163636f756e74732e76312e48616e646c65" .
            "427573696e65737344656c65746564526571756573741a162e676f6f676c" .
            "652e70726f746f6275662e456d7074791298010a23476574457374696d61" .
            "74656442696c6c61626c65526576656e7565496e506572696f6412372e61" .
            "63636f756e74732e76312e476574457374696d6174656442696c6c61626c" .
            "65526576656e7565496e506572696f64526571756573741a382e6163636f" .
            "756e74732e76312e476574457374696d6174656442696c6c61626c655265" .
            "76656e7565496e506572696f64526573706f6e7365325e0a1246756c6669" .
            "6c6c6d656e745365727669636512480a0c5365744175746f52656e657712" .
            "202e6163636f756e74732e76312e5365744175746f52656e657752657175" .
            "6573741a162e676f6f676c652e70726f746f6275662e456d707479422e0a" .
            "22636f6d2e76656e64617374612e6163636f756e74732e76312e67656e65" .
            "7261746564420841706950726f746f620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
