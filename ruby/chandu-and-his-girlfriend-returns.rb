test_cases = gets.chomp.strip.to_i

input = []

test_cases.times do
  input << gets.chomp.strip.split(' ').map(&:to_i)
  input << gets.chomp.strip.split(' ').map(&:to_i).sort.reverse!
  input << gets.chomp.strip.split(' ').map(&:to_i).sort.reverse!
end

out = []

(0...input.length).step(3).each do |i|
  l1 = input[i][0]
  l2 = input[i][1]


  #foo.each_slice(3).to_a
  first = input[i + 1]
  second = input[i + 2]


  t = []
  min = 0
  if l1 > l2
    t = first.each_slice(l2).to_a
    min = l2
  elsif l1 < l2
    t = second.each_slice(l1).to_a
    min = l1
  end

  remain = t[1]
  #print remain

  merge = []
  p = 0
  q = 0
  while p != min && q != min
    if first[p] > second[q]
        merge << first[p]
        p = p + 1
    elsif
        merge << second[q]
        q = q + 1
      end
  end
  merge << remain
  out << merge.join(" ")
end
puts out